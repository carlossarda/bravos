<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ReinoTableSeeder::class);
        $this->call(RegiaoTableSeeder::class);
        $this->call(ReligiaoTableSeeder::class);
        $this->call(VantagemTableSeeder::class);
        $this->call(RacaTableSeeder::class);
        $this->call(ProfissaoTableSeeder::class);
        $this->call(DesvantagemTableSeeder::class);
        $this->call(PersonagemTableSeeder::class);
    }
}
class UserTableSeeder extends  Seeder
{
    public function run()
    {
        \App\User::create(['name'=>'Carlos Augusto','email'=>'teste@teste.com.br','password'=>Hash::make('123456')]);
    }
}

class ReinoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Reino::create(['nome'=>'Deheon','descricao'=>'Reino Capital']);
    }
}

class RegiaoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Regiao::create(['nome'=>'Valkaria','descricao'=>'Cidade lar da Estatua de Valkaria','reino_id'=>1]);
    }
}

class ReligiaoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Religiao::create(['nome'=>'Valkaria']);
    }
}

class VantagemTableSeeder extends Seeder
{
    public function run()
    {
        \App\Vantagem::create(['nome'=>'Audição Aguçada','descricao'=>'Concede uma audição incrével','custo'=>1]);
        \App\Vantagem::create(['nome'=>'Resistência a Magia','descricao'=>'Concede uma resistência sobrenatural ao efeito de diversas magias','custo'=>1]);
    }
}

class RacaTableSeeder extends Seeder
{
    public function run()
    {
        \App\Raca::create(['nome'=>'Humano','descricao'=>'Versáteis']);
        \App\Raca::create(['nome'=>'Elfo','descricao'=>'Orelhudos']);
        \App\Raca::create(['nome'=>'Anão','descricao'=>'Teimosos']);
    }
}

class ProfissaoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Profissao::create(['nome'=>'Mago','descricao'=>'Mago comum','custo'=>0]);
        \App\Profissao::create(['nome'=>'Guerreiro','descricao'=>'Guerreiro comum','custo'=>0]);
        \App\Profissao::create(['nome'=>'Ladrão','descricao'=>'Ladrão comum','custo'=>0]);
    }
}

class DesvantagemTableSeeder extends Seeder
{
    public function run()
    {
        \App\Desvantagem::create(['nome'=>'Inimigo Ocasional','descricao'=>'Um inimigo lhe persegue por algo que fez no presente, passado ou futuro', 'custo'=>1]);
    }
}

class PersonagemTableSeeder extends Seeder
{
    public function run()
    {
        \App\Personagem::create(['nome'=>'Otsugua Adras','nivel'=>1,'idade'=>30,'peso'=>89.5,'altura'=>1.84,'experiencia'=>0,'raca_id'=>1,'profissao_id'=>1,'regiao_id'=>1]);
    }
}
