<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPeminjamanRuangKacaBitcRequest;
use App\Http\Requests\StorePeminjamanRuangKacaBitcRequest;
use App\Http\Requests\UpdatePeminjamanRuangKacaBitcRequest;
use App\Models\PeminjamanRuangKacaBitc;
use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PeminjamanRuangKacaBitcController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('peminjaman_ruang_kaca_bitc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!auth()->user()->is_admin) {
            $peminjamanRuangKacaBitcs = PeminjamanRuangKacaBitc::with(['ruangan', 'user'])->where('user_id', auth()->id())->get();
            return view('admin.peminjamanRuangKacaBitcs.index', compact('peminjamanRuangKacaBitcs'));
        }
        $peminjamanRuangKacaBitcs = PeminjamanRuangKacaBitc::with(['ruangan', 'user'])->get();

        return view('admin.peminjamanRuangKacaBitcs.index', compact('peminjamanRuangKacaBitcs'));
    }

    public function ubahstatus(Request $request, PeminjamanRuangKacaBitc $peminjamanRuangKacaBitc)
    {
        $peminjamanRuangKacaBitc->status = $request->input('status');

        $peminjamanRuangKacaBitc->save();

        return redirect()->route('admin.peminjaman-ruang-kaca-bitcs.index');
    }
    
    public function create()
    {
        abort_if(Gate::denies('peminjaman_ruang_kaca_bitc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.peminjamanRuangKacaBitcs.create');
    }

    public function store(StorePeminjamanRuangKacaBitcRequest $request)
    {
        $attr = $request->all();
        $ruangan = Ruangan::where('nama_ruangan', 'like' , '%ruang%')->first();
        $rid = $ruangan->id;
        $attr['ruangan_id'] = $rid;
        $attr['user_id'] = auth()->id();
        $peminjamanRuangKacaBitc = PeminjamanRuangKacaBitc::create($attr);

        return redirect()->route('admin.peminjaman-ruang-kaca-bitcs.sukses');
    }

    public function edit(PeminjamanRuangKacaBitc $peminjamanRuangKacaBitc)
    {
        abort_if(Gate::denies('peminjaman_ruang_kaca_bitc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.peminjamanRuangKacaBitcs.edit', compact('peminjamanRuangKacaBitc'));
    }

    public function update(UpdatePeminjamanRuangKacaBitcRequest $request, PeminjamanRuangKacaBitc $peminjamanRuangKacaBitc)
    {
        $attr = $request->all();
        $attr['ruangan_id'] = 2;
        $attr['user_id'] = auth()->id();
        $peminjamanRuangKacaBitc->update($attr);

        return redirect()->route('admin.peminjaman-ruang-kaca-bitcs.index');
    }

    public function show(PeminjamanRuangKacaBitc $peminjamanRuangKacaBitc)
    {
        abort_if(Gate::denies('peminjaman_ruang_kaca_bitc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $peminjamanRuangKacaBitc->load('ruangan', 'user');

        return view('admin.peminjamanRuangKacaBitcs.show', compact('peminjamanRuangKacaBitc'));
    }

    public function destroy(PeminjamanRuangKacaBitc $peminjamanRuangKacaBitc)
    {
        abort_if(Gate::denies('peminjaman_ruang_kaca_bitc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $peminjamanRuangKacaBitc->delete();

        return back();
    }

    public function massDestroy(MassDestroyPeminjamanRuangKacaBitcRequest $request)
    {
        $peminjamanRuangKacaBitcs = PeminjamanRuangKacaBitc::find(request('ids'));

        foreach ($peminjamanRuangKacaBitcs as $peminjamanRuangKacaBitc) {
            $peminjamanRuangKacaBitc->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
