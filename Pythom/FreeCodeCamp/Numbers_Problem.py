def arithmetic_arranger(problems, show_answers=False):
    # valida tamanho da lista
    if len(problems) > 5:
        return "Error: Too many problems."
    # inicializa listas para cada linha
    first_line = []
    second_line = []
    dashes = []
    results = []

    # processa cada problema
    for problem in problems:
        parts = problem.split()
        # valida formato do problema
        if len(parts) != 3:
            return "Error: Each problem must contain two operands and one operator."
        # separa partes do problema
        left, operator, right = parts
        # valida operador
        if operator not in ['+', '-']:
            return "Error: Operator must be '+' or '-'."
        # valida se os operandos são números
        if not left.isdigit() or not right.isdigit():
            return "Error: Numbers must only contain digits."
        # valida tamanho dos operandos
        if len(left) > 4 or len(right) > 4:
            return "Error: Numbers cannot be more than four digits."
        # calcula largura necessáriazzzz
        width = max(len(left), len(right)) + 2
        # formata cada linha
        first_line.append(left.rjust(width))
        second_line.append(operator + right.rjust(width - 1))
        dashes.append('-' * width)
        # calcula e formata o resultado, se necessário
        if show_answers:
            result = str(problem)
            results.append(result.rjust(width))
    # junta todas as linhas
    arranged = '    '.join(first_line) + '\n' + \
               '    '.join(second_line) + '\n' + \
               '    '.join(dashes)
    # adiciona resultados, se necessário
    if show_answers:
        arranged += '\n' + '    '.join(results)

    return arranged
# Exemplo de uso
def main():
    problems = ["3801 - 2", "123 + 49"]
    print(arithmetic_arranger(problems))

main()