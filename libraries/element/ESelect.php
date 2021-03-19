<?php


namespace Libraries\element;


class ESelect extends Element
{
    protected $options = [];
    protected $size = 1;
    protected $firstOption = [];
    protected $selectedOption = null;
    protected $optionsGroups = [];

    /**
     * @inheritDoc
     */
    public function view()
    {
        $selectData = $this->getClassVar();

        return view('backend.template.components.element.select', $selectData)->render();
    }

    /**
     * @inheritDoc
     */
    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param $option
     * @param $optionText
     */
    public function setSingleOption($option, $optionText)
    {
        $this->options[$option] = $optionText;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        foreach ($options as $option => $optionText) {
            $this->options[$option] = $optionText;
        }
    }

    /**
     * @param string $option
     * @param string $optionText
     */
    public function setFirstOption($option = '', $optionText = null)
    {
        $optionText = $optionText ?? __('template/common.choose_please');
        $this->firstOption = [
            'value' => $option,
            'text' => $optionText
        ];
    }

    /**
     * @param $option
     */
    public function setSelectedOption($option)
    {
        $this->selectedOption = $option;
    }

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @param $label
     * @param array $options
     */
    public function setOptionGroup($label, array $options)
    {
        $this->optionsGroups[$label] = $options;
    }
}
