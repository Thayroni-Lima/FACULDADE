#include <stdio.h>
#include <locale.h>
#include <stdlib.h>

/*Escreva um algoritmo que leia um valor e determine se o valor lido é positivo ou
negativo*/

int main(void){

    setlocale(LC_ALL, "Portuguese_Brazil");

    int checa_pos_neg;
    printf("Digite um n�mero qualquer:");
    scanf("%d", &checa_pos_neg);

    if (checa_pos_neg > 0)
    {
        printf("O n�mero � positivo!");
    }
    
    else if (checa_pos_neg<0)
    {
        printf("O n�mero � negativo!");
    }
    
    else
    {
        printf("O n�mero � nulo!");
    }

    system ("pause");

    return 0;

}
