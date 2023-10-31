/*Escreva um programa em C que calcule a soma dos números pares de 1 a N, onde N é um número inteiro fornecido pelo usuário.*/

#include <stdio.h>
#include <locale.h>

int main(){
    setlocale(LC_ALL, "Portuguese_Brazil");

    int n;
    int i = 0;
    
    printf("Digite um número qualquer: \n");
	scanf("%d", &n);
	
	for (i; i <= n; i++)
	{
		if((i%2)==0){
			printf("%d", i);	
		}
	}
	
    return 0;
}
