

<div class="quote-field moz-width">

    {!! Form::label('name', 'Last, First', ['class' => 'quote-form-label']) !!}<div class="clear"></div>
    {!! Form::text('name', null, ['placeholder' =>'Doe, John', 'class' => 'quote-form-input-small']) !!}

</div>

<div class="quote-field moz-width">

    {!! Form::label('email', 'Email:', ['class' => 'quote-form-label']) !!}<div class="clear"></div>
    {!! Form::email('email', null, ['placeholder' => 'youremail@mail.com', 'class' => 'quote-form-input-small']) !!}

</div>

<div class="quote-field moz-width">

    {!! Form::label('phone', 'Phone Number:', ['class' => 'quote-form-label']) !!}<div class="clear"></div>
    {!! Form::text('phone', null, ['placeholder' =>'888-888-8888', 'class' => 'quote-form-input-small']) !!}

</div>

<div class="quote-field moz-width">

    {!! Form::label('business_type', 'Business Type:', ['class' => 'quote-form-label']) !!}<div class="clear"></div>
    {!! Form::select('business_type', ['Personal','Automotive','Business Support & Supplies','Computers & Electronics','Construction & Contractors','Education','Entertainment','Food & Dining','Health & Medicine','Home & Garden','Legal & Financial','Manufacturing, Wholesale,
Distribution','Merchants (Retail)','Miscellaneous','Personal Care & Services','Real Estate','Travel & Transportation'], null, ['class' => 'quote-form-input-small']) !!}
</div>

<div class="quote-field moz-width">

    {!! Form::label('sell_online', 'Would You Like to Sell Online (E-Commerce):', ['class' => 'quote-form-label']) !!}<div class="clear"></div>
    {!! Form::select('sell_online', ['Yes', 'No'], null, ['class' => 'quote-form-input-small']) !!}

</div>

<div class="quote-field moz-width">

    {!! Form::label('company_size', 'Expected Internet Traffic', ['class' => 'quote-form-label']) !!}<div class="clear"></div>
    {!! Form::text('company_size', null, ['placeholder' =>'Greater Than 1000 Per Day', 'class' => 'quote-form-input-small']) !!}

</div>

<div class="quote-field moz-width">

    {!! Form::label('message', 'Message:', ['class' => 'quote-form-label']) !!}
    {!! Form::textarea('message', null, ['placeholder' => 'What Are You Looking For Us To Do', 'class' => 'quote-form-input-large'] ) !!}

</div>


<div class="quote-field">

    {!! Form::submit('SEND', ['class' => 'quote-submit btn btn-default']) !!}

</div>