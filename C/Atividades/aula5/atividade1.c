#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

/*Escreva um algoritmo que leia um valor e determine se o valor lido Ã© positivo ou
negativo*/

int main(void){

    setlocale(LC_ALL, "Portuguese_Brazil");

    int checa_pos_neg;
    printf("Digite um número qualquer:");
    scanf("%d", &checa_pos_neg);

    if (checa_pos_neg > 0)
    {
        printf("O número é positivo!");
    }
    
    else if (checa_pos_neg<0)
    {
        printf("O número é negativo!");
    }
    
    else
    {
        printf("O número é nulo!");
    }

    system ("pause");

    return 0;

}
