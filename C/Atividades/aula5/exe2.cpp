#include <stdio.h>
#include <locale.h>

/*Criar uma aplicação para ler 05 números. Em seguida, print os valores em ordem crescente e descrescente dos ÍNDICES (e não dos valores)*/

int main(void){
	setlocale(LC_ALL, "Portuguese_Brazil");
	
	int i, valores[5];
	
	for (i = 0; i <= 4; i++){
		printf("Digite o %dº valor: \n", i + 1);
		scanf("%d", &valores[i]);
	}
	
	for (i = 0; i <= 4; i++){
		printf("%d", valores[i]);
	
	}
	
	printf("\n");
	
	for (i = 4; i >= 0; i--){
		printf("%d", valores[i]);
	
	}
	
	return 0;
}
