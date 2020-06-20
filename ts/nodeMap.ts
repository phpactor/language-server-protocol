import {
    TypeNode,
    Node,
    isTypeAliasDeclaration,
    isInterfaceDeclaration,
    InterfaceDeclaration,
    isIntersectionTypeNode
} from 'typescript';

export class NodeMap {
    aliases: TypeAliasMap = new TypeAliasMap();
    intersections: IntersectionMap = new IntersectionMap();
    interfaces: InterfaceMap = new InterfaceMap();
}

class TypeAliasMap extends Map<string, TypeNode> {
}

class IntersectionMap extends Map<string, TypeNode> {
}

class InterfaceMap extends Map<string, InterfaceDeclaration> {
}

export function createNodeMap(nodes: Node[]): NodeMap {

    const map = new NodeMap();

    nodes.forEach((node: Node) => {

        node.forEachChild((node: Node) => {
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

