#include <stdio.h>
#include <stdlib.h>

int main() {
    int a, b;
    printf("Digite 'a':\n");
    scanf("%d", &a);

    printf("Digite 'b':\n");
    scanf("%d", &b);

    if (a != b){
        printf("A é diferente de B!");
    }

    else{
        printf("A é igual B!");
    }

}