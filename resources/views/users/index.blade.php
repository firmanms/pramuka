@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            {{-- <h2 class="mb-4 h5">{{ __('Users') }}</h2> --}}
            <div class="card-header border-bottom d-flex align-items-center justify-content-between"><h2 class="fs-5 fw-bold mb-0">{{ __('Users') }}</h2><a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Tambah Akun</a></div>

            {{-- <p class="text-info mb-0">Sample table page</p> --}}
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('No') }}</th>
                        <th class="border-gray-200">{{ __('Name') }}</th>
                        <th class="border-gray-200">{{ __('Email') }}</th>
                        <th class="border-gray-200">Roles</th>
                        <th class="border-gray-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><span class="fw-normal">{{ ++$i }}</span></td>
                            <td><span class="fw-normal">{{ $user->name }}</span></td>
                            <td><span class="fw-normal">{{ $user->email }}</span></td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                  @foreach($user->getRoleNames() as $v)
                                     {{ $v }}
                                  @endforeach
                                @endif
                              </td>
                              <td>
                                 <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Lihat</a>
                                 <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Ubah</a>
                                  {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                      {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                  {!! Form::close() !!}
                              </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {!! $users->render() !!} --}}
            <div
                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
