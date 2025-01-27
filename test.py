from transformers import pipeline

# โหลดโมเดลสำหรับการสรุปข้อความ
summarizer = pipeline("summarization")

# ข้อความตัวอย่าง
text = """
Natural Language Processing is a field of AI that focuses on the interaction between computers and human language.
It enables computers to understand and process large amounts of natural language data.
"""

# สรุปข้อความ
summary = summarizer(text, max_length=50, min_length=25, do_sample=False)
print(summary)
