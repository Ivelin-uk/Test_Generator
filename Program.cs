using System;
using System.Collections.Generic;
using System.IO;

class Program
{
    static void Main()
    {
        string filePath = "test.txt";
        var all_tasks = SplitFileByEmptyRow(filePath);
    
        for (int i = 1; i <= 4; i++)
        {
            var random_tasks = SelectRandomTasks(all_tasks,10);
            var test = string.Join(Environment.NewLine,random_tasks);
            File.WriteAllText($"test_{i}.txt", test);
        }
    }

    static List<string> SelectRandomTasks(List<string> all_tasks, int count)
    {
        Random rng = new Random();
        return all_tasks.OrderBy(x => rng.Next()).Take(count).ToList();
    }

    static List<string> SplitFileByEmptyRow(string filePath)
    {
        List<string> sections = new List<string>();
        string currentSection = "";
        string line;

        using (StreamReader reader = new StreamReader(filePath))
        {
            while ((line = reader.ReadLine()) != null)
            {
                if (!string.IsNullOrWhiteSpace(line))
                {
                    currentSection += line + Environment.NewLine;
                }
                else if (!string.IsNullOrEmpty(currentSection))
                {
                    sections.Add(currentSection);
                    currentSection = "";
                }
            }
        }

        // Add the last section if the file doesn't end with an empty line
        if (!string.IsNullOrEmpty(currentSection))
        {
            sections.Add(currentSection);
        }

        return sections;
    }
}
