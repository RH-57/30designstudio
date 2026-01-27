<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FaqController extends Controller
{
    public function index() {
        $faqs = Cache::remember('faqs', 3600, function () {
            return Faq::get();
        });

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create() {
        return view('admin.faqs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'question'  => 'required|string|min:3',
            'answer'    => 'required|string',
        ]);

        Faq::create([
            'question'  => $request->question,
            'answer'    => $request->answer,
        ]);

        Cache::forget('faqs');

        return redirect()->route('faqs.index')->with('success', 'Faq Created Successfully');
    }

    public function show($id) {
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.show', compact('faq'));
    }

    public function edit($id) {
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id) {
        $faq = Faq::findOrFail($id);

        $request->validate([
            'question'  => 'required|string|min:3',
            'answer'    => 'required|string'
        ]);

        $faq->update([
            'question'  => $request->question,
            'answer'    => $request->answer,
        ]);

        Cache::forget('faqs');

        return redirect()->route('faqs.index')->with('success', 'Faq Updated Successfully');
    }

    public function destroy($id) {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        Cache::forget('faqs');

        return redirect()->route('faqs.index')->with('success', 'Faq Deleted Successfully');
    }
}
