<?php

class Model
{
    protected $attributes = [];
    public $table;

    public function __construct()
    {
        if ($this->table == '') {
            $this->table = strtolower(get_class($this) . 's');
        }
    }

    public function newBuilder()
    {
        $builder = SQLBuilder::table($this->table);
        $builder->setModel($this);
        return $builder;
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = new static();
        $builder = $instance->newBuilder();
//        var_dump($instance);
//        var_dump($name);
//        var_dump($arguments);
//        var_dump($builder);
        return call_user_func_array([$builder, $name], $arguments);
    }

    public function newObject()
    {
        return new static();
    }

    public function __call($name, $arguments)
    {
        $builder = $this->newBuilder();

        return call_user_func_array([$builder, $name], $arguments);
    }

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }


}