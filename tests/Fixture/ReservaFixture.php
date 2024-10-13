<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservaFixture
 */
class ReservaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'reserva';
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
                'cliente_id' => 1,
                'funcionario_id' => 1,
                'quarto_id' => 1,
                'data_reserva' => '2024-10-13 01:37:11',
                'data_entrada' => '2024-10-13 01:37:11',
                'data_saida' => '2024-10-13 01:37:11',
                'pessoas' => 1,
                'criancas' => 1,
                'status_res' => 1,
            ],
        ];
        parent::init();
    }
}
