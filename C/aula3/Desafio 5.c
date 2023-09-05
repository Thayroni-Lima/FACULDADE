#include <stdio.h>

int main() {
	int A, B, div;

    printf("Digite o valor de 'A': ");
    scanf("%d", &A);
    
    printf("Digite o valor de 'B': ");
    scanf("%d", &B);
    
    div = A / B;

    printf("A divisão de %d por %d é igual a %d ", A, B, div);

    return 0;
}
