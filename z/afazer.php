<?php 
/*
1. Guardar o prazo m�dio para a simula��o;                          salvar prazoMedio
2. Deixar salvo o pre�o praticado na venda;                         salvar precoPraticado
3. Criar m�todo que verifica produto no carrinho e ativa ele na tela de pesquisa;
4. Ao carregar o pedido salvo, validar o saldo e atualizar as promo��es, caso necess�rio, alertar a exclus�o do �tem;   onLoad: !produto->saldo ? alert and remove
5. Quando dar load do carrinho salvo, carregar o cliente deste;     onLoad: load client


        3 - Regra Validar Pessoa, 
    5 - Valor Minimo da Opera��o 
    6 - Valor Maximo da Opera��o
    24- Enviar Proposta de Credito
        38- Maximo Dias Titulo Em Atraso (?verificar)
        99- Cliente Deve Possuir Rota
    123 - Entidade Financeira
    806 - Filtro para an�lise de desconto por produto
      807 - Filtro para an�lise de desconto por pedido

    voltagem (depois), precoPraticado, saldo
    lado replicador
    46,  558, 552, 