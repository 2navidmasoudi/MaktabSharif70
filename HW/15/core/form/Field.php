<?php

namespace app\core\form;

use app\core\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public Model $model;
    public string $attribute;
    public string $label;
    public string $type = self::TYPE_TEXT;

    public function __construct(Model $model, string $attribute, string $label)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
        $this->label = $label;
    }

    public function __toString()
    {
        return sprintf(
            '
            <div class="mb-3">
                <label for="%s" class="form-label">%s</label>
                <input type="%s" name="%s" value="%s" id="%s" class="form-control%s">
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ',
            $this->attribute,
            $this->label,
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
