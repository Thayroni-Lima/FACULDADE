#include <stdio.h>

int main(){
    int a, b, c;

    printf("Digite os tres lados:");
    scanf("%d", &a);
    scanf("%d", &b);
    scanf("%d", &c);

    if (((a + b) > c) && ((a + c) > b) && ((b + c) > a)){
        printf("Eh um triangulo ");
        if (a == b && b == c){
        printf("e eh Equilatero");
        }
        else if (a == b || a == c || b == c){
        printf("e eh Isosceles");
        }
        else{
        printf("e eh Escaleno");
        }
    }
    else{
        printf("Nao eh um triangulo!");
    }
}