<?php

namespace App\Livewire\School;

use App\Models\School;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class SchoolList extends Component
{
    use WithPagination;
    
    // Search and Filter Properties
    public $search = '';
    public $levelFilter = '';
    public $statusFilter = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $perPage = 10;
    
    // Modal Properties
    public $showModal = false;
    public $schoolId = null;
    public $modalMode = 'create'; // create, edit, view
    
    // Form Properties
    public $name = '';
    public $npsn = '';
    public $level = '';
    public $headmaster = '';
    public $address = '';
    public $kelurahan = '';
    public $kecamatan = '';
    public $propinsi = '';
    public $zip_code = '';
    public $phone = '';
    public $email = '';
    public $fax = '';
    public $status = 'negeri';
    public $is_active = true;
    public $logo_path = '';
    
    protected $queryString = [
        'search' => ['except' => ''],
        'levelFilter' => ['except' => ''],
        'statusFilter' => ['except' => ''],
        'sortBy' => ['except' => 'name'],
        'sortDirection' => ['except' => 'asc']
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingLevelFilter()
    {
        $this->resetPage();
    }
    
    public function updatingStatusFilter()
    {
        $this->resetPage();
    }
    
    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
    }
    
    public function resetFilters()
    {
        $this->search = '';
        $this->levelFilter = '';
        $this->statusFilter = '';
        $this->sortBy = 'name';
        $this->sortDirection = 'asc';
        $this->resetPage();
    }
    
    public function openCreateModal()
    {
        $this->resetForm();
        $this->modalMode = 'create';
        $this->showModal = true;
    }
    
    public function openEditModal($schoolId)
    {
        $school = School::findOrFail($schoolId);
        $this->fillForm($school);
        $this->schoolId = $schoolId;
        $this->modalMode = 'edit';
        $this->showModal = true;
    }
    
    public function openViewModal($schoolId)
    {
        $school = School::findOrFail($schoolId);
        $this->fillForm($school);
        $this->schoolId = $schoolId;
        $this->modalMode = 'view';
        $this->showModal = true;
    }
    
    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }
    
    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'npsn' => 'required|string|size:8|unique:schools,npsn,' . ($this->schoolId ?? 'NULL'),
            'level' => 'required|string',
            'headmaster' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'status' => 'required|in:negeri,swasta',
        ]);
        
        if ($this->modalMode === 'create') {
            School::create([
                'name' => $this->name,
                'npsn' => $this->npsn,
                'level' => $this->level,
                'headmaster' => $this->headmaster,
                'address' => $this->address,
                'kelurahan' => $this->kelurahan,
                'kecamatan' => $this->kecamatan,
                'propinsi' => $this->propinsi,
                'zip_code' => $this->zip_code,
                'phone' => $this->phone,
                'email' => $this->email,
                'fax' => $this->fax,
                'status' => $this->status,
                'is_active' => $this->is_active,
                'logo_path' => $this->logo_path,
            ]);
            
            session()->flash('success', 'Sekolah berhasil ditambahkan!');
        } else {
            $school = School::findOrFail($this->schoolId);
            $school->update([
                'name' => $this->name,
                'npsn' => $this->npsn,
                'level' => $this->level,
                'headmaster' => $this->headmaster,
                'address' => $this->address,
                'kelurahan' => $this->kelurahan,
                'kecamatan' => $this->kecamatan,
                'propinsi' => $this->propinsi,
                'zip_code' => $this->zip_code,
                'phone' => $this->phone,
                'email' => $this->email,
                'fax' => $this->fax,
                'status' => $this->status,
                'is_active' => $this->is_active,
                'logo_path' => $this->logo_path,
            ]);
            
            session()->flash('success', 'Sekolah berhasil diperbarui!');
        }
        
        $this->closeModal();
    }
    
    public function delete($schoolId)
    {
        $school = School::findOrFail($schoolId);
        $school->delete();
        
        session()->flash('success', 'Sekolah berhasil dihapus!');
    }
    
    public function toggleStatus($schoolId)
    {
        $school = School::findOrFail($schoolId);
        $school->update(['is_active' => !$school->is_active]);
        
        session()->flash('success', 'Status sekolah berhasil diubah!');
    }
    
    private function resetForm()
    {
        $this->schoolId = null;
        $this->name = '';
        $this->npsn = '';
        $this->level = '';
        $this->headmaster = '';
        $this->address = '';
        $this->kelurahan = '';
        $this->kecamatan = '';
        $this->propinsi = '';
        $this->zip_code = '';
        $this->phone = '';
        $this->email = '';
        $this->fax = '';
        $this->status = 'negeri';
        $this->is_active = true;
        $this->logo_path = '';
    }
    
    private function fillForm(School $school)
    {
        $this->name = $school->name;
        $this->npsn = $school->npsn;
        $this->level = $school->level;
        $this->headmaster = $school->headmaster;
        $this->address = $school->address;
        $this->kelurahan = $school->kelurahan;
        $this->kecamatan = $school->kecamatan;
        $this->propinsi = $school->propinsi;
        $this->zip_code = $school->zip_code;
        $this->phone = $school->phone;
        $this->email = $school->email;
        $this->fax = $school->fax;
        $this->status = $school->status;
        $this->is_active = $school->is_active;
        $this->logo_path = $school->logo_path;
    }
    
    public function getSchoolsProperty()
    {
        $query = School::query();
        
        // Search
        if ($this->search) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('npsn', 'like', '%' . $this->search . '%')
                  ->orWhere('headmaster', 'like', '%' . $this->search . '%')
                  ->orWhere('address', 'like', '%' . $this->search . '%');
            });
        }
        
        // Level Filter
        if ($this->levelFilter) {
            $query->where('level', $this->levelFilter);
        }
        
        // Status Filter
        if ($this->statusFilter !== '') {
            if ($this->statusFilter === 'active') {
                $query->where('is_active', true);
            } elseif ($this->statusFilter === 'inactive') {
                $query->where('is_active', false);
            }
        }
        
        // Sorting
        $query->orderBy($this->sortBy, $this->sortDirection);
        
        return $query->paginate($this->perPage);
    }
    
    public function getStatsProperty()
    {
        return [
            'total' => School::count(),
            'active' => School::where('is_active', true)->count(),
            'inactive' => School::where('is_active', false)->count(),
            'students' => School::withCount('students')->get()->sum('students_count'),
        ];
    }
    
    public function getLevelColor($level)
    {
        $colors = [
            'sd' => '27ae60',
            'smp' => 'f39c12', 
            'sma' => 'e74c3c',
            'smk' => '34495e',
            'ma' => '9b59b6'
        ];
        
        return $colors[strtolower($level)] ?? '95a5a6';
    }
    
    public function render()
    {
        return view('livewire.school.school-list');
    }
}
