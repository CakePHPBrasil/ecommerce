<?php

return [

    'error' => '<div class="error-message">{{content}}</div>',
    'errorList' => '<ul>{{content}}</ul>',
    'errorItem' => '<li>{{text}}</li>',
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'legend' => '<legend>{{text}}</legend>',    

    'formStart' => '<form{{attrs}}>',
    'file' => '<div class="col-sm-10"><input type="file" name="{{name}}"{{attrs}}></div>',
    'input' => '<div class="col-sm-10"><input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/></div>',
    'inputSubmit' => '<div class="col-sm-offset-2 col-sm-10"><input type="{{type}}"{{attrs}} class="btn btn-default"/></div>',
    'select' => '<div class="col-sm-10"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
    'selectMultiple' => '<div class="col-sm-10"><select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select></div>',
    'checkbox' => '<div class="checkbox"><input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}></div>',
    'button' => '<div class="col-sm-offset-2 col-sm-10"><button{{attrs}} class="btn btn-default">{{text}}</button></div>',
	'submitContainer' => '<div class="col-sm-offset-2 col-sm-10">{{content}}</div>',    
    'dateWidget' => '<div class="col-sm-10">{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}</div>',
    'radio' => '<div class="radio"><input type="radio" name="{{name}}" value="{{value}}"{{attrs}}></div>',
    'textarea' => '<div class="col-sm-10"><textarea name="{{name}}"{{attrs}}>{{value}}</textarea></div>',
    'label' => '<label{{attrs}} class="col-sm-2 control-label">{{text}}</label>',
    'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',


    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    'radioWrapper' => '{{label}}',
    'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    'formEnd' => '</form>',
    'formGroup' => '<div class="col-sm-offset-2 col-sm-10">{{label}}{{input}}</div>',
    'hiddenBlock' => '{{content}}',
    'checkboxFormGroup' => '{{label}}',
    'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
];
