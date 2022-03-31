@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5"
        style="background: linear-gradient(335deg, rgba(255,140,107,1) 0%, rgba(255,228,168,1) 100%);height:100vh">
        <div class="table-responsive-sm">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('updatestatus',$post['id'])}}" method="POST">
                        @csrf
                    <table class="table table-striped table-dark">
                        <tbody>
                            <tr>
                                <th scope="row">Service Type : </th>
                                <td>{{App\Models\ServiceType::find($post['service_type'])['name']}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Word Number : </th>
                                <td>{{ $post['word'] }}</td>
                            </tr>
                            <tr>
                                <th scope="row">User Email : </th>
                                <td>{{ $post['email'] }}</td>
                            </tr>
                            <tr>
                                <th scope="row">User Phone Number : </th>
                                <td>{{ $post['phone'] }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Description : </th>
                                <td>{{ $post['description'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                <input name="status" type="hidden" value="processing">
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-success">
                                {{ __('Provide Service') }}
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
