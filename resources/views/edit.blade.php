@extends('layouts.app')

@section('content')
<style>
  @media print {
  .no-print {
    display:none;
  }
}
</style>
<section class="uk-section uk-padding-remove" style="background-image: linear-gradient(0deg, rgba(34,195,169,1) 0%, rgba(255,225,200,1) 100%);">
    <div class="uk-container">
      
      <div class="uk-flex-center" uk-grid>
        
        <div class="uk-width-2xlarge">

        <div class="no-print">
        <a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top uk-margin-small-bottom" href="/dashboard"><span uk-icon="chevron-left"></span></a>
        <a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-top uk-margin-small-bottom uk-align-right" onclick="window.print()"><span uk-icon="print"></span></a>
        </div>
        
        @if(session('success'))
          <div class="uk-alert-success uk-margin-remove-top" uk-alert>
            <a class="uk-alert-close" uk-close></a>
          <p>Permohonan telah berjaya dikemaskini</p>
        </div>
        @endif
          <x-validation-errors />

          <div class="uk-card uk-box-shadow-small" style="background-color:#ffffff; border-radius: 15px;">
            <div class="uk-card-header no-print">
              <h2 class="uk-text-center">{{ __('Kemaskini Permohonan') }}</h2>

              <hr>
            </div>

            <div class="uk-card-body uk-padding-remove-top">
              <form method="POST" action="{{ route('permohonan.update', $permohonan->id) }}">
              @method('put')
                @csrf

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input type="text" name="name" value="{{ $permohonan->name }}" required readonly autofocus autocomplete="name" />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('No IC') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: credit-card"></span>
                    <input type="text" name="icNo" value="{{ $permohonan->icNo }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('No Telefon') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                    <input type="text" name="phoneNo" value="{{ $permohonan->phoneNo }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Sekolah') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: home"></span>
                    <input type="text" name="schoolName" value="{{ $permohonan->schoolName }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Sijil Peperiksaan') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-edit"></span>
                    <input type="text" name="examType" value="{{ $permohonan->examType }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 1') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject1" value="{{ $permohonan->subject1 }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 1') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade1" type="text" name="grade1" value="{{ $permohonan->grade1 }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 2') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject2" value="{{ $permohonan->subject2 }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 2') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade2" type="text" name="grade2" value="{{ $permohonan->grade2 }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 3') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject3" value="{{ $permohonan->subject3 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 3') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade3" type="text" name="grade3" value="{{ $permohonan->grade3 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 4') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject4" value="{{ $permohonan->subject4 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 4') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade4" type="text" name="grade4" value="{{ $permohonan->grade4 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 5') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject5" value="{{ $permohonan->subject5 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 5') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade5" type="text" name="grade5" value="{{ $permohonan->grade5 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 6') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject6" value="{{ $permohonan->subject6 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 6') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade6" type="text" name="grade6" value="{{ $permohonan->grade6 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 7') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject7" value="{{ $permohonan->subject7 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 7') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade7" type="text" name="grade7" value="{{ $permohonan->grade7 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 8') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject8" value="{{ $permohonan->subject8 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 8') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade8" type="text" name="grade8" value="{{ $permohonan->grade8 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 9') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject9" value="{{ $permohonan->subject9 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 9') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade9" type="text" name="grade9" value="{{ $permohonan->grade9 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 10') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject10" value="{{ $permohonan->subject10 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 10') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade10" type="text" name="grade10" value="{{ $permohonan->grade10 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 11') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject11" value="{{ $permohonan->subject11 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 11') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade11" type="text" name="grade11" value="{{ $permohonan->grade11 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 12') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject12" value="{{ $permohonan->subject12 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 12') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade12" type="text" name="grade12" value="{{ $permohonan->grade12 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 13') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject13" value="{{ $permohonan->subject13 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 13') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input id="grade13" type="text" name="grade13" value="{{ $permohonan->grade13 }}" required readonly />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Tarikh Permohonan Dihantar') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                    <input type="text" name="dateSubmit" value="{{ $permohonan->dateSubmit }}" required readonly  />
                  </div>
                </div>

                <div class="uk-margin no-print">
                  <label class="uk-form-label">{{ __('Muat Turun Slip Peperiksaan') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <div uk-form-custom>
                    <span class="uk-form-icon" uk-icon="icon: download"></span>
                        <input class="uk-input uk-form-width-medium" type="text" id="file" placeholder="{{ $permohonan->file }}" disabled>
                    </div>
                    <div uk-form-custom>
                    <a class="uk-button uk-button-default" href="/uploaded_files/{{ $permohonan->file }}" download>Muat Turun</a>
                    </div>
                  </div>
                </div>

                

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Keputusan') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                    <input id="result" type="text" name="result" value="" required readonly  />
                  </div>
                </div>

                <div class="uk-margin no-print">
                  <label id="info1" class="uk-form-label info" style=" display: none; font-size: 150%;">Pelajar ini <span style="color: green; font-weight: bold;">layak</span> untuk mendapat pengesahan</label>
                </div>

                <div class="uk-margin no-print">
                  <label id="info2" class="uk-form-label info" style="display: none; font-size: 150%;">Pelajar ini tidak layak dan perlu <span style="color: red; font-weight: bold;">ditolak</span></label>
                </div>

                <div class="no-print"><hr></div>


                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Status Permohonan') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <select name="status" required >
                    <option hidden selected value="{{ $permohonan->status }}"> {{ $permohonan->status }} </option>
                    <option value="Permohonan Telah Disahkan">Sahkan Permohonan</option>
                    <option value="Permohonan Telah Ditolak">Tolak Permohonan</option>
                    </select>
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Dikemaskini Oleh') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <select name="dikemaskiniOleh" required >
                    <option hidden selected value="{{ $permohonan->dikemaskiniOleh }}"> {{ $permohonan->dikemaskiniOleh }} </option>
                    <option value="Unit Pendaftaran">Unit Pendaftaran</option>
                    <option value="Unit Peperiksaan">Unit Peperiksaan</option>
                    <option value="Unit Kewangan">Unit Kewangan</option>
                    </select>
                  </div>
                </div>

                <div class="uk-margin no-print">
                  <button class="uk-button uk-button-primary uk-border-rounded uk-width-1-1" type="submit">
                    {{ __('Kemaskini') }}
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <script>
      var g1 = document.getElementById("grade1").value;
      var g2 = document.getElementById("grade2").value;
      var g3 = document.getElementById("grade3").value;
      var g4 = document.getElementById("grade4").value;
      var g5 = document.getElementById("grade5").value;
      var g6 = document.getElementById("grade6").value;
      var g7 = document.getElementById("grade7").value;
      var g8 = document.getElementById("grade8").value;
      var g9 = document.getElementById("grade9").value;
      var g10 = document.getElementById("grade10").value;
      var g11 = document.getElementById("grade11").value;
      var g12 = document.getElementById("grade12").value;
      var g13 = document.getElementById("grade13").value;
      var grades = [g1, g2, g3, g4, g5, g6, g7, g8, g9, g10, g11, g12, g13];
      
      var count = 0;
      for (var i=0; i<grades.length; i++)
      {
        if (grades[i] == 'A')
        {
          count++;
        }
      }
      document.getElementById('result').value = count + 'A';
      var info1 = document.getElementById("info1");
      var info2 = document.getElementById("info2");
      if (count > 4) {
        info1.style.display = "block";
        info2.style.display = "none";
      }
      else {
        info2.style.display = "block";
        info1.style.display = "none";
      }
    </script>
@endsection