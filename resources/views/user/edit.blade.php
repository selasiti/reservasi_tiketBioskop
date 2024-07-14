@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-3">
        <div class="form-container">
            <div class="form-header">
                <h1>Form Edit User</h1>
                <a href="{{ route('user.index') }}">Back</a>
            </div>
            <form action="{{ route('user.update', $user->id) }}" method="post" class="form">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">
                        <span><sup>*</sup></span> Nama
                    </label>
                    <div class="input-container">
                        <input type="text" name="name" id="name" class="border py-2 px-1"
                            placeholder="Masukkan Nama user" value="{{ $user->name }}">
                        @error('name')
                            <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">
                        <span><sup>*</sup></span> Email
                    </label>
                    <div class="input-container">
                        <input type="email" name="email" id="email" class="border py-2 px-1"
                            placeholder="Masukkan Email" value="{{ $user->email }}">
                        @error('email')
                            <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Password
                        lama</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="old_password" id="" class="border py-2 px-1"
                            placeholder="Masukan Password">
                        @error('password')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div>
                <div class="flex w-full my-3">
                    <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Password
                        baru</label>
                    <div class="flex flex-col w-full">
                        <input type="text" name="pasword" id="" class="border py-2 px-1"
                            placeholder="Masukan Password">
                        @error('password')
                            <x-invalid :message="$message" />
                        @enderror
                    </div>
                </div> --}}

                <div class="form-group">
                    <label for="role_id">
                        <span><sup>*</sup></span> Role
                    </label>
                    <div class="input-container">
                        <select name="role_id" id="role_id">
                            <option value="">Tentuksn Role</option>
                            <option value="1">Admin</option>>
                            <option value="2">User</option>
                </select>
                @error('role_id')
                <span class="invalid">{{ $message }}</span>
                @enderror
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection