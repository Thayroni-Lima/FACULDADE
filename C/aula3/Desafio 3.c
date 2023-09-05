#include <stdio.h>

int main() {
    float raio, comprimento, pi;

	pi = 3.14;
    printf("Digite o valor do raio: ");
    scanf("%f", &raio);
    
    comprimento = 2 * pi * raio;

    printf("O comprimento de um círculo de raio %f é %f .\n", raio, comprimento);

    return 0;
}
