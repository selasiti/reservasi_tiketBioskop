<div class="col-md-8>
        <div class="card flex flex-wrap justify-content-center bg-white rounded shadow-md
            p-4">
            <div class="card-header">{{ __('Data user') }}</div>
            <div class="card-body">
                <button class="btn-base" onclick="location.href='{{ route('user.create') }}'">
                    Create Data
                </button>
            </div>
            <table class="responsive-table w-full border">
                <thead class="bg-grey-200 h-10">
                    <tr class="border">
                        <th class="border border-white text-center">No</th>
                        <th class="border border-white text-center">Nama User</th>
                        <th class="border border-white text-center">Email</th>
                        <th class="border border-white text-center">Role</th>
                        <th class="border border-white text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr class="border">
                            <td class="border text-center">{{ $index + 1 }}</td>
                            <td class="border text-center">{{ $user->name }}</td>
                            <td class="border text-center">{{ $user->email }}</td>
                            <td class="border text-center">{{ $user->role_id }}</td>
                            <td class="border text-center">
                                <div class="flex gap-x-5 items-center justify-center">
                                    <button class="btn btn-primary"
                                        onlick="location.href='{{ route('user.edit', $user->id) }}'">
                                        Edit
                                    </button>
                                    <from action="{{ route('user.destroy', $user->id) }}' method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sumbit" onlick="return confirm('Hapus data ini ?')"
                                            class="btn btn-dangar">delete.button>
                                    </from>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


