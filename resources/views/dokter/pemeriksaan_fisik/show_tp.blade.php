
<table class="table table-striped table-bordered table-hover dataTables-example" >
<tr>
<td align="left">Skor Awal Ibu Hamil</td>
<td>2</td>
</tr>
<tr>
<td align="left">Terlalu muda hamil I ≤ 16 Tahun</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_muda_hamil }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu tua hamil I ≥ 35 Tahun</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_tua_hamil }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu lambat hamil I kawin ≥ 4 Tahun</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_lambat_hamil }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu lama hamil lagi ≥ 10 Tahun</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_lama_hamil_lagi }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu cepat hamil lagi ≤ 2 Tahun</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_cepat_hamil_lagi }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu banyak anak, 4 atau lebih</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_banyak_anak }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu tua umur ≥ 35 Tahun</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_tua_umur }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Terlalu pendek ≤ 145 cm</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terlalu_pendek }}
    @endforeach
</td>
</tr>
<tr>
  <tr>
  <td align="left">Pernah Gagal kehamilan</td>
  <td>@foreach($tabel_pr as $tpr)
      {{ $tpr->pernah_gagal_kehamilan }}
      @endforeach
  </td>
  </tr>
  <tr>
<td align="left">Pernah melahirkan dengan terikan tang / vakum</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->terikan_tang }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Pernah melahirkan dengan uri dirogoh</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->uri_dirogoh }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Pernah melahirkan dengan diberi infus/transfuse</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->diberi_infus }}
    @endforeach
</td>
</tr>
<tr>
  <tr>
  <td align="left">Pernah Operasi Sesar</td>
  <td>@foreach($tabel_pr as $tpr)
      {{ $tpr->pernah_operasi_sesar }}
      @endforeach
  </td>
  </tr>
  <tr>
<td align="left">Kurang Darah</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->kurang_darah }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Malaria</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->malaria }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">TBC Paru</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->tbc }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Payah Jantung</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->payah }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Kencing Manis (Diabetes)</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->diabetes }}
    @endforeach
</td>
</tr>
<tr>
<td align="left"> Penyakit Menular Seksual</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->penyakit_menular_seksual }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Bengkak pada muka / tungkai dan tekanan darah tinggi.</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->bengkak_pada_muka }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Hamil kembar</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->hamil_kembar }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Hydramnion</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->hydramnion }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Bayi mati dalam kandungan</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->bayi_mati_dalam_kandungan }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Kehamilan lebih bulan</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->kehamilan_lebih_bulan }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Letak sungsang</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->letak_sungsang }}
    @endforeach
</td>
</tr>
<tr>
<td align="left">Letak Lintang</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->letak_lintang }}
    @endforeach
</td>
</tr>
<td align="left">Perdarahan dalam kehamilan ini</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->perdarahan }}
    @endforeach
</td>
</tr>
<td align="left">Preeklampsia/kejang-kejang</td>
<td>@foreach($tabel_pr as $tpr)
    {{ $tpr->preeklampsia }}
    @endforeach
</td>
</tr>
<tr>
<th align="right">Skor</th>
<td>
</td>
</tr>
</table>
