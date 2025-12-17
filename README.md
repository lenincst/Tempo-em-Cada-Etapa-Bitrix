# Bitrix24 API Integration: Monitoramento de SLA de Leads

> **Repositório de Estudos e Snippets de Backend (PHP)**

Este repositório reúne fragmentos de código, funções e lógicas de backend desenvolvidas para resolver um problema complexo de Business Intelligence: **rastrear e calcular o tempo de permanência de Leads em cada etapa do funil de vendas no Bitrix24.**

---

## 🎯 O Objetivo da Solução

Em operações de vendas de alta performance, saber onde o Lead "trava" é essencial. O projeto original consistia em uma integração via API que:

1.  Coletava o histórico de movimentação dos Leads no CRM.
2.  Calculava o **Delta T (Δt)**: Diferença de tempo entre a entrada e saída de cada estágio.
3.  Gerava métricas para identificar gargalos no processo comercial.

## ⚠️ Nota de Contexto (Propriedade Intelectual)

Este **não é o repositório da aplicação completa**.
O projeto integral foi desenvolvido em ambiente corporativo e é propriedade privada da empresa contratante.

O conteúdo aqui presente consiste em **fragmentos lógicos (Code Snippets)** e funções utilitárias que eu desenvolvi. Eles foram abstraídos e anonimizados para fins de documentação pessoal, portfólio e compartilhamento de conhecimento sobre a API do Bitrix24.

---

## 🛠️ Tecnologias e Conceitos Abordados

Neste compêndio de códigos, você encontrará implementações focadas em:

* **Linguagem:** PHP 8+
* **Integração:** Bitrix24 REST API (via Webhooks e CRest).
* **Manipulação de Dados:** Tratamento de Arrays complexos e JSON.
* **Lógica Temporal:** Cálculos de `DateTime`, `DateInterval` e fusos horários para precisão dos relatórios.
* **Segurança:** Padrões de carregamento de credenciais (Environment Variables).

## 🧩 Destaques do Código (Snippets)

Os arquivos neste repositório demonstram soluções para:

1.  **Iteração de Histórico:** Como percorrer o log de alterações do Lead (`crm.lead.history.list`) para reconstruir a "jornada" do cliente.
2.  **Cálculo de SLA:** Algoritmo que subtrai o *Timestamp* da etapa atual pelo *Timestamp* da etapa anterior, entregando o tempo líquido em dias/horas.
3.  **Conexão Resiliente:** Estrutura básica de chamada à API com tratamento de erros.

---

## 🚀 Como utilizar este material

Estes scripts são **autônomos**. Eles servem como referência para desenvolvedores que precisam lidar com a complexidade da API do Bitrix, especificamente na manipulação de histórico de CRM.

Exemplo de lógica abordada:
```php
// Exemplo abstrato da lógica de cálculo
$entrada = new DateTime($dataEntradaEtapa);
$saida   = new DateTime($dataSaidaEtapa);
$tempoGasto = $entrada->diff($saida);
// Resultado: O Lead ficou 2 dias e 4 horas em "Negociação".
