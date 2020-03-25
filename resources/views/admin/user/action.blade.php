<div class="btn-group">
    <!-- <a href="{{ Url('admin/user/'.$user->id.'/edit/') }}"
       class="btn btn-default btn-sm btn-warning" title="Edit"><i
                class="fa fa-fw fa-edit" style="color:white;"></i></a> -->
    {!! Form::open(array('url' => route('artisan.destroy', [$user->id]),'data-id' =>$user->id, 'class' => 'pull-left')) !!} &nbsp; &nbsp;
    {!! Form::hidden('_method', 'DELETE') !!}
    	{!! csrf_field() !!}
    {!! Form::button('<i class="fa fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn delete-btn btn-danger btn-sm','title'=>'Delete'] ) !!}
    {{ Form::close() }}
</div>
                                        