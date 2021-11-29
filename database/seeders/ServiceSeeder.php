<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [
                'titles' => 'Adolescent Medicine,Bronchial Asthma Treatment,Newborn Jaundice,Limping child,Vaccination/ Immunization,Paediatric Critical Care,Viral Fever Treatment,Lower/Upper Respiratory Tract Infection Treatment,Childhood Infections,Growth & Development Evaluation / Management,Development Assessment,Infectious Disease Treatment,Congenital Disorders Evaluation / Treatment,Infant & Child nutrition,Allergy Testing,New Born Care',
                'department_id' => 36,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Fever,Cough,Thyroid,Headache,Dengue Fever Treatment,Viral Fever Treatment,Hypertension,Tuberculosis (TB),Joint Pains,Treatment of Anemia,Typhoid,Infectious Diseases,Dehydration,Migraines,Skin Infections or Rashes,Asthma attacks,Minor wounds,Diabetes,Depression,Mental Health Checks,Health Checkup (General),Health Screening',
                'department_id' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => "Pituitary Diseases,Interspinous Process Decompression,Brain Tumor Surgery,Spinal Cord Stimulator Implant,Sleep Disorder Treatment,Brain Surgery,Cerebrospinal Fluid Shunt,Cranial Cyber-Knife Radiosurgery,Artificial Cervical Disc Replacement,Parkinson's Disease Treatment,Nerve and Muscle Disorders,Micro Endoscopic Discectomy,Digital Subtraction Angiography (DSA),Dekompressor Discectomy,Vascular Surgery,Alzheimer's Disease,Brain Aneursym Surgery,Epilepsy surgery,Minimally-Invasive Lumbar Microdecompression,Laminectomy,Foot Drop,Total Disc Replacement,Movement Disorder,Vascular Brain Diseases,Motor coordination,Deep Brain Stimulation,Brain Suite,Sciatica Pain Treatment,Brain Mapping,Spinal Tap",
                'department_id' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Paralysis,Decompression Micovascular,Cerebrovascular Surgery,Spine Surgery,Pituitary Diseases,Brain Tumor Surgery,Headache,Micro Endoscopic Discectomy,Minimally-Invasive Lumbar Microdecompression,Artificial Cervical Disc Replacement,Spinal Truma,Cervical And Lumbar Spodylosis',
                'department_id' => 31,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Acne / Pimples Treatment,Acne/ Pimple Scars Treatment,Anti Aging Treatment,Alopecia Areta Treatment,Botox Injections,Chemical Peel,Derma Roller For Acne Scars,Stretch Marks &,Freckles Removal,Facial Rejuvenation Treatment,Hair Loss Treatment,keloid/scar treatment,Laser Hair Removal - Face,Laser Resurfacing,Laser Resurfacing,Mole Removal,Pigmentation Treatment,PRP Treatment,Psoriasis Treatment,Skin Boosters and Fillers,Skin Tags Removal,Stretch Marks Treatment,Tattoo Removal,Wart Removal,Wrinkle Treatment',
                'department_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => "Anxiety Disorder Counselling,Marriage/ Marital Counselling,Stress Management,Psychoanalysis,Family Counseling,Child and Adolescent Problems,Adolescent Medicine,Depression Counselling,Anger Management,Alzheimer's Disease,Psychosexual Problems,Psychoanalysis to Suicide,Nicotine/Tobacco (Smoking) De-addiction Treatment,Drug Abuse & DeAddiction Therapy,Premarital Counseling,Obsessive Compulsive Disorder (OCD) Treatment,Migraine Treatment",
                'department_id' => 39,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Hepato-Biliary-Pancreatic,Chronic Liver Disease,Gastroscopy,Gastritis Treatment,Abdominal Pain Treatment,Intestine Surgery,Bariatric (Gastric Bypass) Surgery,Constipation Treatment,Piles Treatment (Non Surgical),Laparoscopic Surgery,Endoscopy,Colonoscopy,Liver Disease Treatment,Vomit blood,ERCP,Loose Motion,Colorectal Surgery,Piles Surgery',
                'department_id' => 22,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => "Systemic Lupus Erythematosus (SLE) Treatment,Joint Swelling,ARTHRITIS,Systemic Sclerosis (Scleroderma),Behcet's Syndrome,Osteoarthritis Treatment,Wegeners/Granulomatosis with Polyangiitis,Myofascial Pain - Trigger points,Dermatomyositis,Severe Back Pain,Metabolic bone disorder,Microscopic Polyangiitis,Osteomalacia,Polymyositis",
                'department_id' => 43,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Lung Abscess,Pulmonary Function Test (PFT),Lung Cancer Treatment,Pleurisy,Tuberculosis (TB) Treatment,Diseases of the Chest,Chronic Obstructive Pulmonary Disease (COPD) Treatment,Lower/Upper Respiratory Tract Infection Treatment,Chest Disease Treatment,Bronchial Asthma Treatment,Pleural Effusion Treatment,Interstitial Lung Disease Treatment,Cough Treatment,Lung Surgery',
                'department_id' => 40,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Normal Viginal Delivery,Cesarean Delivery,Vaginoplasty,Laproscopy Hysterectomy,Myomectomy,Polycystic Ovarian Disease (PCOD),Meno Pause,Hysteroscopy,Ovarian Cyst,Primary, Secondary infertility,Male factor evaluation,Intrauterine insemination,Ectopic Pregnancy management,Dilation and curettage for abortion,Cervical encirclage,High risk pregnancy,Pre conceptional counselling,Tubectomy or tubal ligation,Placentia Previa,postpartum Copper-T,IUD insertion, contraception,Recurrent heel pains',
                'department_id' => 32,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Chronic Kidney Disease ( CKD ),CAPD Catheter Insertions,Allograft Biopsies,Nephrotic Syndrome Treatment,Acute peritoneal dialysis,Renal Transplantation ( Live related and Deceased donor transplants),Various forms of Dialysis (CAPD,SLED,CRRT& Plasmapheresis),RENAL BIOPSIES,Acute kidney injury (AKI),Diabetes & Hypertension,Central Vein Catheterizations,Glomerulonephritis',
                'department_id' => 27,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Brachytherapy (Internal Radiation Therapy),External Beam Radiation For Prostate Cancer,Advanced Techniques-SBRT,Advanced Techniques-IMRT,Advanced Techniques-IGRT,Advanced Techniques--SRT,Advanced Techniques—SRS,Health Checkup (General),Radiotherapy,Cancer Screening (Preventive),Infectious Disease Treatment,Diabetes Management,Urinary Incontinence (Ui) Treatment,Herpes Infection Treatment,Coronary Angiogram',
                'department_id' => 24,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Arthroscopy,Knee Replacement,Joint Replacement Surgery,Hip Replacement,Revision Hip and Knee Arthroplasty,ACL Reconstruction,shoulder Arthroscopy,Sports Surgery,Total Hip Replacement,Bankart Lesion,Ankle Arthroscopy,Meniscal Surgery,Shoulder Distribution',
                'department_id' => 34,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Amenorrhea,Dysmenorrhea,PCOS,Leucorrhea,Premenstrual Tension,Infertility,Rheumatoid Arthritis,Osteoarthritis,Cervical Spondylosis,Lumbar Spondylitis,Sciatica,Hemorrhoids (piles),Ulcers,Gallstones,General Weakness,Sleeplessness (Insomnia),Sinusitis (all sinus problems),Cough,Fever,Cold,Renal Stones,Acidity,Indigestion',
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Laser Surgeries for Head and Neck Lesions,Nasal Endoscopy,Skull Base Surgery,Laryngoscopy,Fracture Nasal Bone Correction,Laser Surgery,Functional Endoscopic Sinus Surgery - FESS,Ear Micro Surgery,Diagnostic Nasal Endoscopy,Impedence Audiometry,Foreign Body Removal from Ear Nose and Throat,Storz(Germany) - Nasal Endoscopes,Storz(Germany) - Endoscopic Camera,Microsurgery of the Larynx,Surgery for Snoring',
                'department_id' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titles' => 'Diabetes,Thyroid Disorders,Infertility Issues,Growth Issues,Metabolic Disorders,Osteoporosis,Some Cancers and Disorders,Pituitary Gland Disorders,Menopausal Issues,Endocrine Gland Cancer,Chronic Diseases,Low Testosterone,Hormone Disorders,Pancreas Disorder,Biopsy,Recurrent Kidney Stones,Resistant Hypertension,Obesity in Children & Adults',
                'department_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        $chunks = array_chunk($input, 50, true);
        foreach ($chunks as $key => $data) {
            Service::insert($data);
        }
    }
}
