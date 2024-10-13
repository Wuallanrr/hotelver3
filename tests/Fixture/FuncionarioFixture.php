<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFixture
 */
class FuncionarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'funcionario';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'cpf' => 'Lorem ips',
                'doc_pessoal' => 'Lorem ipsum dolor ',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'data_nasc' => '2024-10-13',
                'funcao' => 'Lorem ipsum dolor ',
                'salario' => 1.5,
                'avaliacao' => 'Lorem ipsum dolor sit amet',
                'data_cadastro' => '2024-10-13 01:35:52',
            ],
        ];
        parent::init();
    }
}
