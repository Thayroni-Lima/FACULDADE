#include <stdio.h>

int main() {
    int numero, dobro;

    printf("Digite um número inteiro: ");
    scanf("%d", &numero);
    
    dobro = numero * 2;

    printf("O dobro de %d é %d.\n", numero, dobro);

    return 0;
}
