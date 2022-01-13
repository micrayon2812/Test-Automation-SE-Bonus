<?php

class __Mustache_8aec658e81397a7e9aed347f6aace100 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="initialbar ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '    <span class="initialbarlabel mr-2">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="initialbargroups d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '        <ul class="pagination pagination-sm">
';
        // 'current' section
        $value = $context->find('current');
        $buffer .= $this->sectionC11269948a8c54a61f47cafa139b7706($context, $indent, $value);
        // 'current' inverted section
        $value = $context->find('current');
        if (empty($value)) {
            
            $buffer .= $indent . '            <li class="initialbarall page-item active">
';
            $buffer .= $indent . '                <a data-initial="" class="page-link">';
            $value = $this->resolveValue($context->find('all'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '            </li>
';
        }
        $buffer .= $indent . '        </ul>
';
        // 'group' section
        $value = $context->find('group');
        $buffer .= $this->sectionE4243aac6119680ee9767015920aa910($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionC11269948a8c54a61f47cafa139b7706(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="initialbarall page-item">
                <a data-initial="" class="page-link" href="{{url}}">{{all}}</a>
            </li>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="initialbarall page-item">
';
                $buffer .= $indent . '                <a data-initial="" class="page-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('all'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section496ae89f588001748591984476e3836a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li data-initial="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-item active ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><span class="page-link">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe73e5b8f71172aa8c3b5b00ca1550fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#selected}}
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    {{/selected}}
                    {{^selected}}
                        <li data-initial="{{name}}" class="page-item {{name}}"><a class="page-link" href="{{url}}">{{name}}</a></li>
                    {{/selected}}
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section496ae89f588001748591984476e3836a($context, $indent, $value);
                // 'selected' inverted section
                $value = $context->find('selected');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <li data-initial="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="page-item ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"><a class="page-link" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4243aac6119680ee9767015920aa910(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="pagination pagination-sm">
                {{#letter}}
                    {{#selected}}
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    {{/selected}}
                    {{^selected}}
                        <li data-initial="{{name}}" class="page-item {{name}}"><a class="page-link" href="{{url}}">{{name}}</a></li>
                    {{/selected}}
                {{/letter}}
            </ul>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul class="pagination pagination-sm">
';
                // 'letter' section
                $value = $context->find('letter');
                $buffer .= $this->sectionBe73e5b8f71172aa8c3b5b00ca1550fd($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
