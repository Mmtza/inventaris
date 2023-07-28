<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        \Myth\Auth\Authentication\Passwords\ValidationRules::class
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $barang = [
        'nama_barang' => 'required',
        'jumlah' => 'required',
        'harga' => 'required',
        'id_supplier' => 'required',
        'id_kategori' => 'required'
    ];

    public $supplier = [
        'nama_supplier' => 'required',
        'alamat' => 'required'
    ];

    public $kategori = [
        'jenis' => 'required'
    ];

    public $barang_errors = [
        'nama_barang' => [
            'required' => 'Nama Barang wajib diisi.',
        ],
        'Jumlah' => [
            'required' => 'Jumlah wajib diisi.'
        ],
        'Harga' => [
            'required' => 'Harga wajib diisi.'
        ],
        'id_supplier' => [
            'required' => 'Supplier wajib diisi.'
        ],
        'id_kategori' => [
            'required' => 'Kategori wajib diisi.'
        ],
        'foto' => [
            'required' => 'Foto wajib diisi.'
        ],
    ];

    public $supplier_errors = [
        'nama_supplier' => [
            'required' => 'Nama Supplier wajib diisi.',
        ],
        'alamat' => [
            'required' => 'Alamat Supplier wajib diisi.'
        ]
    ];

    public $kategori_errors = [
        'jenis' => [
            'required' => 'Jenis Kategori wajib diisi.',
        ]
    ];
}