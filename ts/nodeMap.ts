import {
    TypeNode,
    Node,
    isTypeAliasDeclaration,
    isInterfaceDeclaration,
    InterfaceDeclaration,
    isIntersectionTypeNode,
    SyntaxKind,
    isEnumDeclaration,
    isNamespaceExport,
    isModuleDeclaration,
    ModuleDeclaration
} from 'typescript';
import {isNull} from 'util';

export class NodeMap {
    aliases: TypeAliasMap = new TypeAliasMap();
    intersections: IntersectionMap = new IntersectionMap();
    interfaces: InterfaceMap = new InterfaceMap();
    modules: ModuleMap = new ModuleMap();

    hasName(name: string) {
        return this.intersections.has(name) || this.interfaces.has(name);
    }
}

class TypeAliasMap extends Map<string, TypeNode> {
}

class IntersectionMap extends Map<string, TypeNode> {
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

            if (isModuleDeclaration(node)) {
                map.modules.set(node.name.text, node);
                return;
            }

            if (isTypeAliasDeclaration(node)) {

                if (isIntersectionTypeNode(node.type)) {
                    map.intersections.set(node.name.escapedText.toString(), node.type);
                    return;
                }

                map.aliases.set(node.name.escapedText.toString(), node.type);
                return;
            }

            if (isInterfaceDeclaration(node)) {
                map.interfaces.set(node.name.escapedText.toString(), node);
                return;
            }
        });

    });

    return map;
}

