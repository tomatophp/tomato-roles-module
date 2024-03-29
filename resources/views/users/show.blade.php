<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.view')}} {{ trans('tomato-roles::global.users.single') }} #{{$model->id}}">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <x-tomato-admin-row :label="trans('tomato-roles::global.users.name')" :value="$model->name" type="string" />
        <x-tomato-admin-row :label="trans('tomato-roles::global.users.email')" :value="$model->email" type="email" />
        <x-tomato-admin-row :label="trans('tomato-roles::global.users.roles')" :value="$model->roles->pluck('name')->implode(', ')" type="string" />
    </div>
    <div class="flex justify-start gap-2 pt-3">
        <x-tomato-admin-button warning label="{{__('Edit')}}" :href="route('admin.users.edit', $model->id)"/>
        <x-tomato-admin-button danger :href="route('admin.users.destroy', $model->id)"
                               confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                               confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                               confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                               cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                               method="delete"  label="{{__('Delete')}}" />
        <x-tomato-admin-button secondary :href="route('admin.users.index')" label="{{__('Cancel')}}"/>
    </div>


</x-tomato-admin-container>
