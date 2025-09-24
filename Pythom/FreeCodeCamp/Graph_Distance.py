# Não está rodando no Terminal do VSCode, descobrir o por que
my_graph = {
    'A': [('B', 5), ('C', 3), ('E', 11)],
    'B': [('A', 5), ('C', 1), ('F', 2)],
    'C': [('A', 3), ('B', 1), ('D', 1), ('E', 5)],
    'D': [('C', 1), ('E', 9), ('F', 3)],
    'E': [('A', 11), ('C', 5), ('D', 9)],
    'F': [('B', 2), ('D', 3)]
}

def shortest_path(graph, start, target = ''):
    # Inicialização
    unvisited = list(graph)
    distances = {node: 0 if node == start else float('inf') for node in graph}
    paths = {node: [] for node in graph}
    paths[start].append(start)   
    
    while unvisited:
        # Nó não visitado com a menor distância
        current = min(unvisited, key=distances.get)
        # Atualização das distâncias dos vizinhos
        for node, distance in graph[current]:
            # Se a distância calculada for menor, atualize
            if distance + distances[current] < distances[node]:
                distances[node] = distance + distances[current]
                # Atualização do caminho
                if paths[node] and paths[node][-1] == node:
                    # Evita duplicação do nó no caminho
                    paths[node] = paths[current][:]
                else:
                    # Extende o caminho atual
                    paths[node].extend(paths[current])
                # Adiciona o nó vizinho ao caminho
                paths[node].append(node)
        # Marca o nó atual como visitado        
        unvisited.remove(current)
    # Impressão dos resultados
    targets_to_print = [target] if target else graph
    # Se um alvo específico for fornecido, imprima apenas esse
    for node in targets_to_print:
        # Pule o nó inicial
        if node == start:
            continue
        print(f'\n{start}-{node} distance: {distances[node]}\nPath: {" -> ".join(paths[node])}')
    # Retorna distâncias e caminhos para uso posterior, se necessário
    return distances, paths
# Exemplo de uso
if __name__ == "__main__":    
    shortest_path(my_graph,'A','E')