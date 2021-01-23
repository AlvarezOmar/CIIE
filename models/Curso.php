<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $id
 * @property string $nombre
 * @property string $sesion
 * @property string $hora
 * @property string $asesor
 * @property string $imagen
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'sesion', 'hora', 'asesor', 'image'], 'required'],
            [['nombre'], 'string', 'max' => 30],
            [['sesion'], 'string', 'max' => 50],
            [['hora'], 'string', 'max' => 20],
            [['asesor'], 'string', 'max' => 40],
            [['image'], 'file','extensions'=>'jpg,png','skipOnEmpty'=>false]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'sesion' => 'Sesión',
            'hora' => 'Hora',
            'asesor' => 'Asesor',
            'image' => 'Imagen',
        ];
    }

}
