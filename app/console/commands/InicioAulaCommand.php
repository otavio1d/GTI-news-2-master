<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InicioAulaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inicio-aula';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa as operações necessárias para iniciar a aula';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Executando composer install
        $this->info('Executando composer install...');
        exec('composer install');

        // Executando npm install
        $this->info('Executando npm install...');
        exec('npm install');

        // Executando migrações do Laravel
        $this->info('Executando migrações do banco de dados...');
        exec('php artisan migrate --force', $output, $return_var);
        foreach ($output as $line) {
            $this->line($line);
        }

        // Iniciando o servidor Laravel de forma assíncrona
        $this->info('Iniciando o servidor Laravel em um novo terminal...');
        pclose(popen('start "Laravel Server" cmd /c "php artisan serve"', 'r'));

        // Abrindo um novo processo para o npm run dev no Windows
        $this->info('Executando npm run dev em um novo terminal...');
        pclose(popen('start "NPM Run Dev" cmd /c "npm run dev"', 'r'));

        $this->newLine();
        $this->question('NÃO FECHE AS JANELAS ABERTAS PARA NÃO PARA O SERVIDOR!');
        $this->comment('NÃO FECHE AS JANELAS ABERTAS PARA NÃO PARA O SERVIDOR!');
        $this->question('NÃO FECHE AS JANELAS ABERTAS PARA NÃO PARA O SERVIDOR!');

        // Abre o navegador na URL especificada após um pequeno delay para garantir que o servidor esteja rodando
        $this->info('Abrindo o projeto no navegador...');
        sleep(10); // Espera 10 segundos para garantir que o servidor esteja pronto
        exec('start http://localhost:8000');


        $this->newLine();
        $this->alert('Tudo Pronto! Boa aula!! ;D');
        $this->newLine();
    }
}
