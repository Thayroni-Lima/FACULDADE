#include <stdio.h>

int main() {
    int numero, dobro;

    printf("Digite um n�mero inteiro: ");
    scanf("%d", &numero);
    
    dobro = numero * 2;

    printf("O dobro de %d � %d.\n", numero, dobro);

    return 0;
}
