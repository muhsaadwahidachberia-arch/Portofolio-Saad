<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'RuangLab V2',
                'description' => 'Sistem reservasi laboratorium berbasis Laravel, deploy di server Ubuntu via Proxmox dengan Cloudflare Tunnel.',
                'link' => 'https://github.com/TUBES-CCA-2026/RuangLab',
                'image' => null,
                'tags' => ['Laravel', 'MySQL', 'Proxmox', 'Cloudflare Tunnel'],
            ],
            [
                'title' => 'Tugas Besar Jaringan Komputer',
                'description' => 'Desain jaringan komputer kawasan perumahan terpadu (5 blok) menggunakan VLSM, VLAN, Router-on-a-Stick, OSPF, BGP di Cisco Packet Tracer.',
                'link' => null,
                'image' => null,
                'tags' => ['Cisco Packet Tracer', 'VLSM', 'VLAN', 'OSPF', 'BGP'],
            ],
        ];

        $certificates = [
            [
                'title' => 'Sertifikat',
                'file' => 'certificates/sertifikat.pdf',
                'thumbnail' => null,
            ],
        ];

        $experiences = [
            [
                'year' => '2023 — Sekarang',
                'title' => 'Mahasiswa Teknik Informatika',
                'place' => 'Universitas Muslim Indonesia',
                'description' => 'Fokus belajar pengembangan web (Laravel) dan jaringan komputer.',
            ],
            [
                'year' => 'Sekarang',
                'title' => 'Asisten Praktikum',
                'place' => 'Web Programming & Web Development',
                'description' => 'Membantu mahasiswa lain memahami dasar pemrograman web berbasis Laravel.',
            ],
        ];

        $cvPath = file_exists(public_path('cv/cv-saad.pdf')) ? 'cv/cv-saad.pdf' : null;

        return view('portfolio', [
            'projects' => $projects,
            'certificates' => $certificates,
            'experiences' => $experiences,
            'cvPath' => $cvPath,
        ]);
    }

    public function sendContact(Request $request)
    {
        // Honeypot: real users never fill this hidden field, bots usually do.
        if ($request->filled('company')) {
            return back()->with('contact_success', 'Pesan kamu berhasil dikirim, terima kasih!');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactMessage($validated['name'], $validated['email'], $validated['message']));

        return back()->with('contact_success', 'Pesan kamu berhasil dikirim, terima kasih!');
    }
}
