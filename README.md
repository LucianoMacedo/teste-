Segue as instruções para acessar o sistema de cliente..
<br>
0.clonar o repositorio.<br>
1.composer update pois não vai o vendor, e sem o vendor não irá funcionar.<br>
2.criar um .env com seu banco de dados mysql pois o env que está é uma copia um exemplo.<br>
3.vou deixar um arquivo com as querys por meio de banco de dados fiz pelo mysql workbench<br>
4.fiz um faker para popular o banco de dados:<br>
4.1 Só rodar php artisan db:seed --class=ClienteTableSeeder que estará os dados fakes no banco de dados.<br>
5.inicie o servidor php artisan serve.<br>

Bom foi pedido algo simples porém se quiser um outro teste fazendo cadastro de cliente posso fazer também sem problemas.
