<div>
 <div class="flex px-[10%]">
    <div class="w-3/12">
        <form action="">

        </form>
    </div>

    <div class="w-9/12">
        <table class="full border p-3">
            <thead>
                <tr>
                    <th class="border p-3">Id</th>
                    <th class="border p-3">Name</th>
                    <th class="border p-3">Contact</th>
                    <th class="border p-3">Email</th>
                    <th class="border p-3">City</th>
                    <th class="border p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $std)
                
            
                <tr>
                    <td class="border p-3">{{ $std->id }}</td>
                    <td class="border p-3">{{ $std->name }}</td>
                    <td class="border p-3">{{ $std->contact }}</td>
                    <td class="border p-3">{{ $std->email }}</td>
                    <td class="border p-3">{{ $std->city }}</td>
                    <td class="border p-3">
                        <button wire:click="deleteStudent({{ $std->id }})" type="button" class="bg-red-500 text-white px-3 py-2 rounded shadow">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links()}}
    </div>
 </div>
</div>
