/*Escreva um programa em C que calcule a soma dos n�meros pares de 1 a N, onde N � um n�mero inteiro fornecido pelo usu�rio.*/

#include <stdio.h>
#include <locale.h>

int main(){
    setlocale(LC_ALL, "Portuguese_Brazil");

    int n;
    int i = 0;
    
    printf("Digite um n�mero qualquer: \n");
	scanf("%d", &n);
	
	for (i; i <= n; i++)
	{
		if((i%2)==0){
			printf("%d", i);	
		}
	}
	
    return 0;
}
