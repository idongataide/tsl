<?php

class about extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'About Us';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/stories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                // 'Cache-Control: no-cache',
            ],
    
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
    
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        $data['stories'] = $decodedResponse['data'] ?? [];
        $data['menu_active'] = 'about';
        $this->loadView('about-us', @$data);
    }

    public function leadership()
    {
        $data['menu_active'] = 'about';
        $data['page_title'] = 'Leadership';
        $this->loadView('leadership', @$data);
    }
    
    
    public function leaderships($id)
        {
            $leaders = [
                1 => [
                    'title' => 'Deji Wright',
                    'sub_title' => 'Managing Director/CEO',
                    'p_1' => "As one of the founders of TSL, Deji is a visionary legal and business leader with a distinguished career spanning multiple sectors. With a deep understanding of complex legal and commercial landscapes, he has consistently demonstrated a remarkable ability to drive strategic initiatives and deliver exceptional results.",
                    'p_2' => "He holds advanced legal degrees from prestigious institutions, including an LL.M. in Petroleum Law & Economics from the University of Dundee, an LL.M. in Commercial & Corporate Law from King’s College London, and an LL.B. from the University of Buckingham.",
                    'p_3' => "His focus on innovation and commitment to sustainable growth have contributed significantly to TSL’s success, helping the company achieve key milestones and build a strong market presence."
                ],
                
                2 => [
                    'title' => 'Ibitayo Edunfunke',
                    'sub_title' => 'Group Head, Health, Safety, Security, Environment & Quality (HSSEQ)',
                    'p_1' => "Ibitayo is a seasoned HSSEQ (Health, Safety, Security, Environment, and Quality) professional with over 25 years of experience in the FMCG sector. He currently serves as the Group Head of HSSEQ at Transport Services Limited, where he leads strategic initiatives to enhance operational safety, compliance, and sustainability.",
                    'p_2' => "An alumnus of the prestigious Lagos Business School’s Senior Management Programme, Ibitayo holds both a B.Sc. and M.Sc. in Biochemistry from the University of Lagos. He is also a member of the American Society of Safety Professionals (ASSP), reflecting his commitment to global best practices in HSSEQ management.",
                    'p_3' => "With extensive experience in the Nigerian and Sub-Saharan African markets, Ibitayo has held leadership roles in several multinational FMCG companies. He has a proven track record of promoting safety-first cultures, enhancing operational efficiency, and driving sustainable business."
                ],
                
                3 => [
                    'title' => 'Atinuke A-Badiru',
                    'sub_title' => 'Group Chief Financial Officer',
                    'p_1' => "Atinuke is an innovative and dynamic leader with over 17 years of professional experience, offering deep expertise in the transportation industry. She excels in strategic financial planning, implementation, and driving long-term business sustainability through sound fiscal management and operational efficiency.",
                    'p_2' => "A Fellow Chartered Accountant (FCA) with the Institute of Chartered Accountants of Nigeria and a Chartered Global Management Accountant (CGMA), Atinuke also holds a B.Sc. (Hons) in Estate Management from the University of Lagos. Her strong academic and professional credentials underpin her exceptional leadership in financial strategy and corporate governance.",
                    'p_3' => "Atinuke’s career includes key roles in a leading Big Four firm, where she gained extensive experience in consulting, financial services, and logistics. This diverse background has equipped her with a strong blend of analytical expertise, strategic insight, and industry-specific knowledge, enhancing her effectiveness as a business leader."
                ],
                
                4 => [
                    'title' => 'Kelechi Vera Olawoyin',
                    'sub_title' => 'Chief Sustainability Officer',
                    'p_1' => "Kelechi is a business leader with expertise in Human Resources and Communications, bringing over 18 years of experience across consulting, global non-profits, FMCG, pharmaceuticals, and telecommunications. She is passionate about helping businesses succeed while delivering value to stakeholders.",
                    'p_2' => "She holds a B.Sc. in Mass Communication from the University of Nigeria and an M.Sc. in Mass Communication from the University of Lagos. Kelechi is a certified practitioner in MBTI, Firo-B, DISC, and Balanced Scorecard methodologies, as well as a certified coach. A Fellow of the Chartered Institute of Personnel Management (CIPM), she is currently pursuing an MBA at Imperial College London and is a recipient of the prestigious Imperial College Excellence Award. Additionally, she is an inaugural alumna of the Global Executive Programme at the Swedish Institute.",
                    'p_3' => "Kelechi’s multi-sector expertise in leading teams and implementing innovative HR and communication strategies positions her as a transformative business leader focused on sustainable organizational success."
                ],
                
                5 => [
                    'title' => 'Yetunde Adewale',
                    'sub_title' => 'Group Head, Legal',
                    'p_1' => "A legal expert with over 20 years of professional experience in General Civil Litigation and Corporate Commercial Law, specializing in insolvency practice, business recovery, corporate governance, and contract management.",
                    'p_2' => "She holds an LLB from Ambrose Alli University and an LLM from the University of London. She is also a Certified Professional Contract Manager and a Notary Public of the Federal Republic of Nigeria.",
                    'p_3' => "With extensive experience gained from working with several reputable law firms, Yetunde has developed a deep understanding of the legal landscape. Her expertise allows her to provide strategic legal counsel and ensure compliance with regulatory and corporate governance standards."
                ],
                
                6 => [
                    'title' => 'Idris Akinsanya',
                    'sub_title' => 'Chief Operating Officer',
                    'p_1' => "A dynamic leader with over 18 years of professional experience in transport management. His extensive career within the company has fostered a deep understanding of the transport industry which he utilizes to enhance operational efficiency, ensure seamless transport services, and manage complex logistics effectively.",
                    'p_2' => "He holds a B.Sc. in Mathematical Sciences with a specialization in Statistics from the Federal University of Agriculture, Abeokuta, Nigeria, and is an alumnus of Lagos Business School Senior Management Programme and Cranfield School of Management, UK.",
                    'p_3' => "Idris is a proficient leader who leverages his strong analytical foundation to implement data-driven strategies that optimize operational performance."
                ],
                
                7 => [
                    'title' => 'Goodluck Adiele',
                    'sub_title' => 'Head, Drivers Administration',
                    'p_1' => "Goodluck is a transport management and HSE professional with over 12 years of experience across key industries, including manufacturing, oil and gas, FMCG, and telecommunications. He holds a B.Eng in Civil and Public Health Engineering from the Federal University of Technology, Owerri, and is currently pursuing an MBA at Rome Business School.",
                    'p_2' => "He possesses strong technical expertise in Occupational Health and Safety (OH&S), holding NEBOSH certifications in Process Safety Management (NEBOSH PSM), Oil and Gas Safety (NEBOSH IOG), and the NEBOSH International Diploma in Environmental Management. He is also certified in IEMA Managers’ Sustainability Skills.",
                    'p_3' => "For the past four years, Goodluck has successfully led the Drivers Administration unit, ensuring operational efficiency and effective management of the company’s driver workforce. He leverages his diverse background and industry experience to implement innovative solutions that enhance driver performance, improve operational safety, and ensure compliance with industry standards."
                ],
                
                8 => [
                    'title' => 'Abiodun Ope-Adesanya',
                    'sub_title' => 'Group Head HR & Admin',
                    'p_1' => "Abiodun is a Human Resources expert with over 20 years of experience spanning the logistics, oil and gas, and financial sectors. She has a strong track record of driving organizational success through strategic HR initiatives, leadership development, and talent management.",
                    'p_2' => "She holds an MBA from Swiss Management University in Zurich, Switzerland, and a Bachelor of Technology in Food Science & Technology from the Federal University of Technology, Akure (FUTA). She is an Associate of both the Chartered Institute of Personnel Management (CIPM) and the Nigerian Institute of Training and Development (NITAD).",
                    'p_3' => "Abiodun’s expertise lies in navigating complex human capital challenges and implementing innovative HR strategies that boost employee performance while aligning with organizational goals. Her extensive industry knowledge and leadership experience make her a critical driver of business growth through effective people management."
                ],
                
                9 => [
                    'title' => 'Bolaji Daisi',
                    'sub_title' => 'Group Head, Supply Chain',
                    'p_1' => "Bolaji is a seasoned professional with over 20 years of experience in Supply Chain, Sales, and Marketing. He applies his expertise in business planning, quality management, supply chain optimization, strategic planning, and marketing strategy to enhance organizational efficiency and drive sustainable growth.",
                    'p_2' => "He holds both an M.Sc. and B.Sc. in Chemistry from the University of Ibadan. He is a member of the Institute of Chartered Chemists of Nigeria (ICCON) and the Chartered Institute of Marketing (CIM, UK).",
                    'p_3' => "He combines his in-depth knowledge of supply chain management, market dynamics, and consumer behaviour with data-driven approaches to implement strategic initiatives that enhance business performance and drive long-term growth."
                ],
                
                10 => [
                    'title' => 'Fatai Alimi',
                    'sub_title' => 'Head of Operations - Oil & Gas',
                    'p_1' => "With over 16 years of experience in transport and logistics, Fatai has established a proven track record in operational excellence and strategic leadership, with a specialization in oil and gas operations and procurement.",
                    'p_2' => "He holds a B.Sc. in Soil Science from Obafemi Awolowo University, Ile-Ife, Nigeria, and an MBA from the Malaysia University of Science. He is a member of the Chartered Institute of Transport and Logistics (MCILT) and a Certified Professional in-Patient Safety (CPPS).",
                    'p_3' => "Starting his career at TSL as a graduate trainee, Fatai steadily rose through the ranks to assume key leadership roles within the organization. He has spearheaded transformative initiatives aimed at optimizing operations, enhancing logistics efficiency, and driving sustainable business growth. His strategic leadership and innovative problem-solving have consistently delivered measurable results, positioning him as a dependable leader in the company."
                ],

               11 => [
                    'title' => 'Adepoju Ogunniyi',
                    'sub_title' => 'Head, Strategy and Business Transformation',
                    'p_1' => "With over 13 years of experience, Adepoju Ogunniyi has built a strong reputation for driving organizational excellence through strategic initiatives, business transformation, and operational optimization. His career commenced as a consultant, enabling him to gain valuable expertise while delivering impactful solutions across industries such as aviation, oil and gas, media, the public sector, and financial services.",
                    'p_2' => "Adepoju holds a Master of Science in Industrial & Organisational Psychology from the University of Liverpool, UK, a Higher National Diploma in Accounting & Finance from Yaba College of Technology, and a Certificate of Specialization in Strategy from Harvard Business School Online. He is also a Certified Balanced Scorecard Professional by the Balanced Scorecard Institute USA and holds a Certificate for Advanced Study in Strategic Management from the George Washington University College of Professional Studies.",
                    'p_3' => "At TSL, Adepoju leverages his extensive experience in business strategy and operational optimization to drive enterprise-wide improvements. He leads critical initiatives that enhance organizational performance, streamline operations, and align business functions with the company’s strategic goals, ensuring long-term growth and competitive advantage."
                ],
                
                12 => [
                    'title' => 'Emmanuel Eze',
                    'sub_title' => 'Head of Operations, Mining & Construction, West and Port Operations',
                    'p_1' => "Emmanuel Eze is a results-driven leader with over two decades of experience in the shipping, logistics, and supply chain industries. Recognized for his ability to streamline operations and boost profitability, he has a proven track record of driving business success through proactive management and strategic planning.",
                    'p_2' => "His career spans leadership roles across key sectors, including shipping, logistics, transportation, and supply chain management. His expertise includes transport and operations management, sales and distribution, and inventory control, enabling him to implement solutions that enhance efficiency and drive sustainable growth.",
                    'p_3' => "Emmanuel holds a Master’s in Business Administration from Enugu State University and is an Affiliate Member of the Chartered Institute of Logistics and Transport (CILT). His industry knowledge and leadership acumen continue to position him as an asset in achieving operational excellence."
                ],
                
                13 => [
                    'title' => 'Akorede Lemboye',
                    'sub_title' => 'Head of Operations - FMCG',
                    'p_1' => "Akorede is a driven and results-oriented leader with over 15 years of experience in transport planning, logistics, and distribution, specializing in the supply and distribution of FMCG, containers, and oil and gas products. He joined the company as a graduate trainee and steadily rose through the ranks due to his demonstrated expertise and leadership in the logistics industry.",
                    'p_2' => "He holds a B.Sc. in Geography and Regional Planning from Olabisi Onabanjo University, Nigeria. He is an APICS Certified Supply Chain Professional, a Certified Member of the Chartered Institute of Logistics and Transportation (UK), and a Project Management Practitioner certified by JK Michaels and Multimix Academy Nigeria.",
                    'p_3' => "Akorede is dedicated to operational excellence and adept at solving complex logistics challenges. His commitment to fostering a collaborative and high-performing work environment, combined with his strategic initiatives to enhance the company’s competitive edge in the transport and logistics industry, earned him the prestigious TSL Extra Mile Award."
                ],
                
                14 => [
                    'title' => 'Jeremiah Ulori',
                    'sub_title' => 'Head, Eastern Operations',
                    'p_1' => "Jeremiah leads the Eastern Operations for TSL, bringing over a decade of experience in operational management and strategic leadership. After successfully resolving key operational challenges in the West region, he now leads operations in the East, driving improvements in productivity, resource optimization, and profitability.",
                    'p_2' => "His career spans critical roles in logistics and transport operations, where he has consistently excelled in managing complex supply chains and executing strategic business plans. A certified NEBOSH safety professional, Jeremiah prioritizes compliance with safety standards and promotes a proactive risk management culture across all operations.",
                    'p_3' => "Jeremiah holds an M.Sc. in Economics from the University of Lagos and a B.Sc. in Economics from Delta State University. He has further advanced his expertise through professional certifications, including the Logistics and Supply Chain Management Programme from Lagos Business School, Lean Six Sigma White Belt Certification, and membership in the Chartered Institute of Transport and Logistics. He remains committed to continuous learning and professional development."
                ]

            ];
        
            $data['lead'] = $leaders[$id];
            $this->loadView('details', @$data);
           
             
    }


    public function videos()
   {
        $data['page_title'] = 'Videos';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/videos',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                // 'Cache-Control: no-cache',
            ],    
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
    
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        $data['videos'] = $decodedResponse['data'] ?? [];
        $this->loadView('videos', @$data);
    }

    public function gallery()
    {
        $data['page_title'] = 'Gallery';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/images',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                // 'Cache-Control: no-cache',
            ],    
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
    
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        $data['gallery'] = $decodedResponse['data'] ?? [];
        $this->loadView('gallery', @$data);
    }

}
