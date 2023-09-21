#include <stdio.h>

int main(){
    int a;

    printf("Digite o código do produto:\n");
    scanf("%d", &a);

    if (a == 1){
        printf("This product came from S.\n");
    }

    else if (a == 2){
        printf("This product came from N.\n");
    } 

    else if (a == 3){
        printf("This product came from E.\n");
    } 

    else if (a == 4){
        printf("This product came from 4.\n");
    } 

    else if (a == 5 || a == 6){
        printf("This product came from NE.\n");
    } 

    else if (a == 7 || a == 8 || a == 9){
        printf("This product came from SE.\n");
    }

    else if (a == 10){
        printf("This product came from CW.\n");
    }

    else if (a == 11){
        printf("This product came from NW.\n");
    }

    else{
        printf("This product came from another place (imported).\n");
    }

}