<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinanceiroFixture
 */
class FinanceiroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'financeiro';
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
                'funcionario_id' => 1,
                'ganho_id' => 1,
                'despesa_id' => 1,
                'Ano' => 'Lorem ipsum dolor sit amet',
                'fechamento_mes' => 'Lorem ip',
                'valor_liquido' => 1.5,
                'data_lanc' => '2024-10-13',
            ],
        ];
        parent::init();
    }
}