import {
    SyntaxKind,
    TypeNode,
    ArrayTypeNode,
    UnionTypeNode,
    TupleTypeNode,
    ParenthesizedTypeNode,
    TypeReferenceNode,
    isTypeReferenceNode,
    isIdentifier,
    isIntersectionTypeNode,
    IntersectionTypeNode,
    isTypeLiteralNode,
    TypeLiteralNode,
} from 'typescript';

import {NodeMap} from './nodeMap';

export class PhpType
{
    real: string|null;
    documented: string;
    classNames: ClassName[] = [];
    iterable: boolean = false;

    constructor (real: string, documented: string, classNames: ClassName[] = [], iterable: boolean = false)
    {
        this.real = real;
        this.documented = documented;
        this.classNames = classNames;
        this.iterable = iterable;
    }
}

export type ClassName = string;

export class TypeConverter
{
    nodeMap: NodeMap;

    constructor(nodeMap: NodeMap)
    {
        this.nodeMap = nodeMap;
    }

    phpType(type: TypeNode|TypeReferenceNode|null): PhpType {
        if (null === type) {
            return new PhpType(null,'');
        }

        if (SyntaxKind[type.kind] == 'StringKeyword') {
            return new PhpType('string', 'string');
        }

        if (SyntaxKind[type.kind] == 'BooleanKeyword') {
            return new PhpType('bool','bool');
        }

        if (SyntaxKind[type.kind] == 'AnyKeyword') {
            return new PhpType(null, 'mixed');
        }

        if (SyntaxKind[type.kind] == 'NullKeyword') {
            return new PhpType(null, 'null');
        }

        if (SyntaxKind[type.kind] == 'NumberKeyword') {
            return new PhpType('int', 'int');
        }

        if (SyntaxKind[type.kind] == 'ObjectKeyword') {
            // just leave undefined objects as arrays
            return new PhpType('array', 'array<mixed>');
        }

        if (SyntaxKind[type.kind] == 'TupleType') {
            return this.phpTypeTuple(type as TupleTypeNode);
        }

        // TODO: This refers to nested type definitions. We should
        //       generate a new class in this case for PHP.
        if (isTypeLiteralNode(type)) {
            return this.phpTypeLiteral(type);
        }

        if (SyntaxKind[type.kind] == 'ParenthesizedType') {
            return this.phpTypeParenthesis(type as ParenthesizedTypeNode);
        }

        if (SyntaxKind[type.kind] == 'ArrayType') {
            return this.phpTypeArray(type as ArrayTypeNode);
        }

        if (SyntaxKind[type.kind] == 'LiteralType') {
            return new PhpType(null, type.getText());
        }

        if (SyntaxKind[type.kind] == 'UnionType') {
            return this.phpTypeUnion(type as UnionTypeNode);
        }

        if (isIntersectionTypeNode(type)) {
            return this.phpTypeIntersection(type);
        }

        if (isTypeReferenceNode(type) && isIdentifier(type.typeName)) {
            const typeName = type.typeName.escapedText.toString();

            if (typeName === 'uinteger' || typeName === 'integer') {
                return new PhpType('int', 'int');
            }

            if (this.nodeMap.modules.has(typeName)) {
                return new PhpType(null, typeName + '::*');
            }

            if (this.nodeMap.aliases.has(typeName)) {
                return this.phpType(this.nodeMap.aliases.get(typeName));
            }

            if (this.nodeMap.interfaces.has(typeName)) {
                return new PhpType(typeName, typeName, [ typeName ]);
            }

            if (this.nodeMap.intersections.has(typeName)) {
                return new PhpType(typeName, typeName, [ typeName ]);
            }

            console.warn(`Unknown type ${typeName}`);
            return new PhpType(null, 'mixed');
        }

        return new PhpType(null,'');
    }

    private phpTypeParenthesis(type: ParenthesizedTypeNode): PhpType {
        return new PhpType(null, `(${this.phpType(type.type).documented})`);
    }

    private phpTypeArray(type: ArrayTypeNode): PhpType {
        return new PhpType('array', `array<${this.phpType(type.elementType).documented}>`, this.phpType(type.elementType).classNames, true);
    }

    private phpTypeUnion(type: UnionTypeNode): PhpType {
        const phpTypes = type.types.map((type: TypeNode) => {
            return this.phpType(type);
        });

        const classNames = type.types.map((type: TypeNode) => {
            if (!isTypeReferenceNode(type) || !isIdentifier(type.typeName)) {
                return null;
            }

            const name = type.typeName.escapedText.toString();

            if (!this.nodeMap.hasIntersectionOrInterface(name)) {
                //console.warn(`Could not find type ${name}`);
                return null;
            }

            return name;
        }).filter((type) => {
            return type !== null;
        });

        return new PhpType(
            null,
            phpTypes.map((type: PhpType) => { return type.documented; }).join('|'),
            classNames as ClassName[]
        );
    }

    private phpTypeIntersection(type: IntersectionTypeNode): PhpType {
        const phpTypes = type.types.map((type: TypeNode) => {
            return this.phpType(type);
        });

        return new PhpType(
            null,
            phpTypes.map((type: PhpType) => { return type.documented; }).join('&')
        );
    }

    private phpTypeTuple(type: TupleTypeNode): PhpType {
        const types = type.elementTypes.map((type: TypeNode) => {
            return this.phpType(type).documented;
        }).join(',');

        return new PhpType(
            'array',
            `array{${types}}`
        );
    }

    private phpTypeLiteral(type: TypeLiteralNode): PhpType {
        // TODO: These are sub-types. We could attempt to render a PHPStan
        //       array-shape here, but it would be better to create a new class.
        return new PhpType('array', `array<mixed>`);
    }
}

