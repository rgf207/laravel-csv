<?php

namespace onethirtyone\csv;


use Excel;

class csv
{
    /**
     * Mapped Model
     *
     * @var string
     */
    protected $map;

    /**
     * @var mixed
     */
    protected $data;

    public function __construct($map = null)
    {
        $this->map = $map ?? config('csv.default');
    }

    public function map($map = null)
    {
        $this->map = $map ?? config('csv.default');

        return $this;
    }

    public function getMap()
    {
        return $this->map;
    }


    public function display()
    {
        return 'This is a message from my csv package';
    }

    public function load($path)
    {
        $this->data = Excel::load($path);

        return $this;
    }

    public function get()
    {
        return $this->data->get();
    }

    public function create()
    {
        $model = config('csv.mapping.' . $this->getMap());

        foreach ($this->get() as $item) {
            $data = '';
            $object = new $model['model'];
            foreach ($model['data'] as $key => $value) {

                if (is_array($value)) {
                    foreach ($value as $partial) {
                        $data .= $item->{$partial} . $model['separator'];
                    }
                    $object->{$key} = $data;

                } else {
                    $object->{$key} = $item->{$value};
                }
            }
            $object->save();
        }
    }
}