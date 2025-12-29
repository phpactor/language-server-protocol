import {
    TypeNode,
    Node,
    isTypeAliasDeclaration,
    isInterfaceDeclaration,
    InterfaceDeclaration,
    isIntersectionTypeNode,
    isModuleDeclaration,
    ModuleDeclaration,
    TypeLiteralNode,
    isTypeLiteralNode,
    isUnionTypeNode
} from 'typescript';
import {isNull} from 'util';
import {constantsFromModule} from './phpClass';

export class NodeMap {
    aliases: TypeAliasMap = new TypeAliasMap();
    intersections: IntersectionMap = new IntersectionMap();
    unions: UnionMap = new UnionMap();
    interfaces: InterfaceMap = new InterfaceMap();
    modules: ModuleMap = new ModuleMap();
    typeLiterals = new TypeLiteralMap();

    hasIntersectionOrInterface(name: string) {
        return this.intersections.has(name) || this.interfaces.has(name);
    }
}

class TypeAliasMap extends Map<string, TypeNode> {
}

class IntersectionMap extends Map<string, TypeNode> {
}
class UnionMap extends Map<string, string[]> {
}
class TypeLiteralMap extends Map<string, TypeLiteralNode> {
}

class InterfaceMap extends Map<string, InterfaceDeclaration> {
}

class ModuleMap extends Map<string, ModuleDeclaration> {
}

export function createNodeMap(nodes: Node[], filter: RegExp = null): NodeMap {

    const map = new NodeMap();

    nodes.forEach((node: Node) => {

        node.forEachChild((node: Node) => {
            if (!isNull(filter) && !filter.test(node.getText())) {
                return;
            }

            if (isTypeAliasDeclaration(node)) {

                if (isIntersectionTypeNode(node.type)) {
                    map.intersections.set(node.name.escapedText.toString(), node.type);
                    return;
                }

                if (isUnionTypeNode(node.type)) {
                    if (node.name.escapedText.toString() ==='TextDocumentContentChangeEvent') {

                        const incremental = node.type.types[0];
                        const full = node.type.types[1];

                        if (!isTypeLiteralNode(incremental) || !isTypeLiteralNode(full)) {
                            return;
                        }

                        map.typeLiterals.set(
                            'TextDocumentContentChangeIncrementalEvent',
                            incremental
                        );
                        map.typeLiterals.set(
                            'TextDocumentContentChangeFullEvent',
                            full
                        );
                        map.unions.set(node.name.escapedText.toString(), [
                            'TextDocumentContentChangeIncrementalEvent',
                            'TextDocumentContentChangeFullEvent'
                        ]);

                        return;
                    }
                }

                if ([
                    'InlayHint',
                    'InlineValueText',
                    'InlineValueVariableLookup',
                    'InlineValueEvaluatableExpression'
                ].includes(node.name.escapedText.toString())) {
                    if (isTypeLiteralNode(node.type)) {
                        map.typeLiterals.set(node.name.escapedText.toString(), node.type);
                    }
                }

                map.aliases.set(node.name.escapedText.toString(), node.type);
                return;
            }

            if (isModuleDeclaration(node)) {
                if (constantsFromModule(node).size === 0) {
                    return;
                }

                // type aliases have priority
                if (!map.aliases.has(node.name.text)) {
                    map.modules.set(node.name.text, node);
                }
                return;
            }

            if (isInterfaceDeclaration(node)) {

                // type aliases have priority
                if (!map.aliases.has(node.name.escapedText.toString())) {
                    map.interfaces.set(node.name.escapedText.toString(), node);
                    return;
                }
            }
        });

    });

    return map;
}

