@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.priority.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.priorities.update", [$priority->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.priority.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($priority) ? $priority->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.priority.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('color') ? 'has-error' : '' }}">
                <label for="color">{{ trans('cruds.priority.fields.color') }}</label>
                <input type="text" id="color" name="color" class="form-control" value="{{ old('color', isset($priority) ? $priority->color : '') }}">
                @if($errors->has('color'))
                    <em class="invalid-feedback">
                        {{ $errors->first('color') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.priority.fields.color_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection