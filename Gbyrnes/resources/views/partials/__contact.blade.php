

<div class="contact-field moz-width">

    {!! Form::label('name', 'Name:', ['class' => 'contact-form-label']) !!} <div class="clear"></div>
    {!! Form::text('name', null, ['placeholder' =>'John Doe', 'class' => 'contact-form-input-small']) !!}

</div>

<div class="contact-field moz-width">

    {!! Form::label('email', 'Email:', ['class' => 'contact-form-label']) !!}<div class="clear"></div>
    {!! Form::email('email', null, ['placeholder' => 'Johndoe@mail.com', 'class' => 'contact-form-input-small']) !!}

</div>

<div class="contact-field moz-width">

    {!! Form::label('phone', 'Phone:', ['class' => 'contact-form-label']) !!}<div class="clear"></div>
    {!! Form::text('phone', null, ['placeholder' =>'888-888-8888 ext. 888', 'class' => 'contact-form-input-small']) !!}

</div>

<div class="contact-field">

    {!! Form::label('message', 'Message:', ['class' => 'contact-form-label']) !!}<div class="clear"></div>
    {!! Form::textarea('message', null, ['placeholder' => 'What Are You Looking For Us To Do', 'class' => 'contact-form-input-large'] ) !!}

</div>

<div class="contact-field">

    {!! Form::submit('Submit', ['class' => 'contact-submit btn btn-default']) !!}

</div>