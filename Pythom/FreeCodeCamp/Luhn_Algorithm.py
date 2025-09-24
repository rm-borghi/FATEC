def verify_card_number(card_number):
    sum_of_odd_digits = 0
    # Inverter o número do cartão
    card_number_reversed = card_number[::-1]
    # Pegar os dígitos nas posições ímpares (1ª, 3ª, 5ª, ...)
    odd_digits = card_number_reversed[::2]
    # Somar os dígitos nas posições ímpares
    for digit in odd_digits:
        sum_of_odd_digits += int(digit)
    # Digitos nas posições pares (2ª, 4ª, 6ª, ...)
    sum_of_even_digits = 0
    # Pegar os dígitos nas posições pares
    even_digits = card_number_reversed[1::2]
    # Dobrar cada dígito nas posições pares e somar os dígitos resultantes
    for digit in even_digits:
        number = int(digit) * 2
        if number >= 10:
            number = (number // 10) + (number % 10)
        sum_of_even_digits += number

    total = sum_of_odd_digits + sum_of_even_digits    
    
    return total % 10 == 0

def main():
    card_number = '4111-1111-1111-12111'
    # Remover os espaços e hífens do número do cartão
    card_translation = str.maketrans({'-': '', ' ': ''})
    # chama a função translate() para remover os caracteres indesejados
    translated_card_number = card_number.translate(card_translation)

    if verify_card_number(translated_card_number):
        print('VALID!')
    else:
        print('INVALID!')

main()