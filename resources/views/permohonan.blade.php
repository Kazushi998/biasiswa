@extends('layouts.app')

@section('content')


<section class="uk-section" style="background-image: linear-gradient(0deg, rgba(34,195,169,1) 0%, rgba(255,225,200,1) 100%);">
  
    <div class="uk-container">
      
      <div class="uk-flex-center" uk-grid>
        
        <div class="uk-width-2xlarge">
        @if(session('success'))
          <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
          <p>Permohonan telah berjaya dihantar</p>
        </div>
        @endif
          <x-validation-errors />

          <div class="uk-card uk-box-shadow-small" style="background-color:#ffffff; border-radius: 15px;">
            <div class="uk-card-header">
              <h2 class="uk-text-center">{{ __('Permohonan Baharu') }}</h2>

              <hr>
            </div>

            <div class="uk-card-body uk-padding-remove-top">
              <form method="POST" action="{{ route('permohonan.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('No IC') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: credit-card"></span>
                    <input type="text" name="icNo" value="{{ old('icNo') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('No Telefon') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                    <input type="text" name="phoneNo" value="{{ old('phoneNo') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Sekolah') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: home"></span>
                    <input type="text" name="schoolName" value="{{ old('schoolName') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Sijil Peperiksaan') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <select name="examType" required >
                    <option hidden disabled selected value> -- Sila pilih -- </option>
                    <option value="SPM">SPM</option>
                    <option value="STPM">STPM</option>
                    <option value="STAM">STAM</option>
                    </select>
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 1') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject1" value="{{ old('subject1') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 1') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade1" value="{{ old('grade1') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 2') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject2" value="{{ old('subject2') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 2') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade2" value="{{ old('grade2') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 3') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject3" value="{{ old('subject3') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 3') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade3" value="{{ old('grade3') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 4') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject4" value="{{ old('subject4') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 4') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade4" value="{{ old('grade4') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 5') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject5" value="{{ old('subject5') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 5') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade5" value="{{ old('grade5') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 6') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject6" value="{{ old('subject6') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 6') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade6" value="{{ old('grade6') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 7') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject7" value="{{ old('subject7') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 7') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade7" value="{{ old('grade7') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 8') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject8" value="{{ old('subject8') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 8') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade8" value="{{ old('grade8') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 9') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject9" value="{{ old('subject9') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 9') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade9" value="{{ old('grade9') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 10') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject10" value="{{ old('subject10') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 10') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade10" value="{{ old('grade10') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 11') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject11" value="{{ old('subject11') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 11') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade11" value="{{ old('grade11') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 12') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject12" value="{{ old('subject12') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 12') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade12" value="{{ old('grade12') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Nama Mata Pelajaran 13') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: album"></span>
                    <input type="text" name="subject13" value="{{ old('subject13') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Gred Mata Pelajaran 13') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <input type="text" name="grade13" value="{{ old('grade13') }}" required />
                  </div>
                </div>

                <div class="uk-margin">
                  <label class="uk-form-label">{{ __('Muat Naik Slip Peperiksaan') }}</label>

                  <div class="uk-inline uk-width-1-1">
                    <div uk-form-custom>
                    <span class="uk-form-icon" uk-icon="icon: file-pdf"></span>
                        <input class="uk-input uk-form-width-medium" type="text" id="file" placeholder="Select file" disabled>
                    </div>
                    <div uk-form-custom>
                        <input type="file" name="file" required>
                        <button class="uk-button uk-button-default" type="button">Pilih Fail</button>
                    </div>
                  </div>
                </div>

                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-checkbox" type="checkbox" required> &nbspSaya akui maklumat yang saya beri adalah benar</label>
        </div>

                <input type="hidden" name="dateSubmit" value="{{ now() }}" />
                <input type="hidden" name="status" value="Permohonan Belum Disahkan" />
                <input type="hidden" name="dikemaskiniOleh" value="Tiada Kemaskini" />

                <div class="uk-margin">
                  <button class="uk-button uk-border-rounded uk-button-primary uk-width-1-1" type="submit">
                    {{ __('Hantar') }}
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById("file").placeholder = fileName;
        });
    });
</script>
  </section>
@endsection